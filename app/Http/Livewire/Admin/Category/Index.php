<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Customer $category;

    public function mount()
    {
        $this->category = new Customer();
    }



    protected $rules = [
        'category.start' => 'required',
        'category.end' => 'required',
    ];

    public function updated($start)
    {
        $this->validateOnly($start);
    }


    public function categoryForm()
    {

//        $this->validate();
        $start_time = strtotime($this->category->start); // زمان شروع
        $end_time = strtotime($this->category->end); // زمان پایان

        $current_time = $start_time;
        while ($current_time < $end_time) {
            $interval_end_time = $current_time + 15*60; // اضافه کردن ۱۵ دقیقه به زمان کنونی
            $category=Customer::query()->create([
              'time'=>  date('Y-m-d H:i:s', $current_time),
              'name'=>  'رزرو نشده'
            ]);

            $current_time = $interval_end_time;
        }



        $this->category->start = "";
        $this->category->end = "";

        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'افزودن نوبت'.'-' . $this->category->start,
            'actionType' => 'ایجاد'
        ]);
        $this->emit('toast', 'success', ' نوبت اضافه  شد');

    }



    public function loadCategory()
    {
        $this->readyToLoad = true;
    }





    public function render()
    {

        $customerss = $this->readyToLoad ? Customer::where('nobat_code', 'LIKE', "%{$this->search}%")->
        orWhere('name', 'LIKE', "%{$this->search}%")->
        orWhere('lname', 'LIKE', "%{$this->search}%")->
        orWhere('number', 'LIKE', "%{$this->search}%")->
        orWhere('national_Code', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.category.index', compact('customerss'));
    }
}
