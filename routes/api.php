<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\Burgercontroller;
use App\Http\Controllers\Api\ProductController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// get data 
Route::group(['middleware'=>'api','namespace'=>'Api'],function(){
    Route::get('getCategory','Burgercontroller@getall');
    Route::get('getUsers','UsersController@getall');
    Route::get('getProduct','ProductController@getall');
    Route::get('getAdmin','AdminController@getall');
});


// insert 
Route::post('newUsers',[UsersController::class,'newUsers']);
Route::post('newAdmin',[AdminController::class,'newAdmin']);
Route::post('newCategory',[Burgercontroller::class,'newCategory']);
Route::post('newProduct',[ProductController::class,'newProduct']);


// delete data
Route::delete('deleteUsers/{id}',[UsersController::class,'deleteUsers']);
Route::delete('deleteAdmin/{id}',[AdminController::class,'deleteAdmin']);
Route::delete('deleteCategory/{id}',[Burgercontroller::class,'deleteCategory']);
Route::delete('deleteProduct/{id}',[ProductController::class,'deleteProduct']);



// update data
Route::put("updateUsers/{id}",[UsersController::class,'updateUsers']);
Route::put("updateAdmin/{id}",[AdminController::class,'updateAdmin']);
Route::put("updateCategory/{id}",[Burgercontroller::class,'updateCategory']);
Route::put("updateProduct/{id}",[ProductController::class,'updateProduct']);

//layth hasan 









