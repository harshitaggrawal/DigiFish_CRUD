<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\studentsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





Route::get("list",[studentsController:: class,'getAllData']);
//  http://127.0.0.1:8000/api/list

Route::get("list/{id}",[studentsController:: class,'getDataWithId']);

// http://127.0.0.1:8000/api/list/2

Route::post("add",[studentsController:: class,'add']);

// http://127.0.0.1:8000/api/add

Route::put("update/{id}",[studentsController:: class,'update']);
// http://127.0.0.1:8000/api/update


Route::delete("delete/{id}",[studentsController:: class,'delete']);


// http://127.0.0.1:8000/api/delete/100







