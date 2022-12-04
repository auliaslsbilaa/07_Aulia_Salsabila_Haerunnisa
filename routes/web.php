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
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/karyawan/index',[KaryawanController::class,'index']);
Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::get('/karyawan/edit',[KaryawanController::class,'show']);
//  Route::get('/', function () {
//     return view('layout/main');
// });


