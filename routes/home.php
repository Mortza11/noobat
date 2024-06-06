<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',\App\Http\Livewire\Home\Home\Index::class)->name('home.index');

Route::get('/contact/category1',\App\Http\Livewire\Home\Home\Contactt::class)->name('contact.index');
Route::get('/category',\App\Http\Livewire\Home\Home\Contactu::class)->name('contactu');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



