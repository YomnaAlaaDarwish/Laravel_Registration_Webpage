<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/Confirmation', function () {
    return view('Confirmation');
});
Route::get('converter/{locale}',function($locale){
    if(in_array($locale,['ar','en']))
    {
        session()->put('locale',$locale);
    }
        return redirect()->back();
    })->name('converter');
