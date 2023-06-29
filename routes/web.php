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
Route::view('ho', 'home')->name('name2');

Route::get('/name/{id}/{age?}',function($id,$age=null){
    if($id==1&&$age==1)
    {
        return "rishi";
    }
    elseif($id==2&&$age==2)
    {
        return "roshan";
    }
    if($id==3)
    {
        return "pop";
    }
})->name('name2');

