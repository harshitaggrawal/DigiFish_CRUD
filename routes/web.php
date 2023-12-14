<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\fetchData;


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













Route::view('add','addStudent');
Route::post("add",[fetchData:: class,'addStudent']);   

Route::get('/',[fetchData::class,'index']);

Route::delete("delete/{id}",[fetchData:: class,'delete']);


Route::get("update/{id}",[fetchData:: class,'update']);

Route::put("update/{id}",[fetchData:: class,'edit']);

Route::view('validateForm','validateFom');
Route::post("validate",[fetchData::class,'validation']);





