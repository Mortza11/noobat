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

//======================================>admin/dashboard
Route::get('/',\App\Http\Livewire\Admin\Dashboard\Index::class)->name('admin.index');
//=======================================>LogSystem
Route::get('/log',\App\Http\Livewire\Admin\Log\Index::class)->name('log.index');

//=======================================> //category//
Route::get('/category',\App\Http\Livewire\Admin\Category\Index::class)->name('category.index');












