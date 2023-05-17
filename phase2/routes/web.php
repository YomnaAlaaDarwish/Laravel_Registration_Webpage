<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DB_Ops_Controller;
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
use App\Http\Controllers\ActorController;
Route::get('Actors',[ActorController::class,"callapi"]);
Route::get('/', function () {
    return view('index');
});

// Route::get('my-form', [DB_Ops_Controller::class, 'myform']);
Route::post('/', [DB_Ops_Controller::class, 'myformPost'])->name('my.form');
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
