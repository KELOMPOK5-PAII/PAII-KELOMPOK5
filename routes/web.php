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

Route::get('/','App\Http\Controllers\HomeController@home');
Route::get('/akomodasi','App\Http\Controllers\AkomodasiController@index');
Route::get('/akomodasi/asrama','App\Http\Controllers\AsramaController@index');


Route::get('/f', function () {
    return view('fasilitas');
});


Route::get('/login', function () {
    return view('/Admin/login');
});
Route::get('/Admin/login', 'Admin/LoginController@index');



