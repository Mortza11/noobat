<?php

namespace App\Http\Livewire\Home\Home;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{
    public  Customer $category;

    protected $rules = [
        'category.time' => 'required',
//        'category.name' => 'required',
//        'category.lname' => 'required',
//        'category.number' => 'required',
//        'category.National_Code' => 'required',
//        'category.for_whom' => 'required'
    ];
    public function categoryform()
    {
        $this->validate();
        $cattt=\App\Models\Customer::where('time',$this->category->time)->get();

        redirect('/contact');
//        return $this->redirect(route('contactu',$cattt->id));
//        Customer::where('id', $cattt->id)->update([
//            'name' => $this->category->name,
//            'Lname' => $this->category->lname,
//            'number' => $this->category->number,
//            'National_Code' => $this->category->National_Code,
//            'for_whom' => $this->category->for_whom

//        ]);


    }





    public function render()
    {
        return view('livewire.home.home.index')->layout('layouts.home');
    }

}
