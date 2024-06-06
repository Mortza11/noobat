<?php

namespace App\Http\Livewire\Home\Home;

use App\Models\Customer;
use Livewire\Component;

class Contactu extends Component
{
    public  Customer $category;
    public function mount()
    {
        $this->category = new Customer();
    }
    public $time;
    public $name;
    public $lname;
    public $number;
    public $national_code;
    public $for_whom;


    public function categoryform()
    {
//        $this->validate();

//        $cattt=\App\Models\Customer::where('time',$this->time)->first();
      Customer::where('id', $this->time)->update([
            'name' => $this->name,
            'Lname' => $this->lname,
            'number' => $this->number,
            'National_Code' => $this->national_code,
            'for_whom' => $this->for_whom ? true:false ,

        ]);
        return $this->redirect('/');
//
    }
    public function render()
    {
        return view('livewire.home.home.contactu')->layout('layouts.home');
    }
}
