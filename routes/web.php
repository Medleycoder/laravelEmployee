<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\employController;

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

// Route::get('/', function () {

//     $employ = users::all();
    
//     return view('welcome',compact('employ'));
// });


Route::get('/',[SupplierController::class,'inde']);

Route::get('/formUser',[SupplierController::class,'showForm']);

Route::post('/addUser',[SupplierController::class,'addUser']);

// Route::get('/',[SupplierController::class,'show']);

Route::get('/update_employee/{id}',[SupplierController::class,'update_employee']);

Route::get('/delete_employee/{id}',[SupplierController::class,'delete_employee']);

Route::put('/updateUser/{id}',[SupplierController::class,'updateUser']);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                //EMPLOYCONTROLLER//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('/employee', employController::class);