<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

/*User*/
Route::get('/','App\Http\Controllers\HomeController@home');

Route::get('/akomodasi','App\Http\Controllers\AkomodasiController@index');
Route::get('/akomodasi/asrama','App\Http\Controllers\AsramaController@index');
Route::get('/akomodasi/kantin','App\Http\Controllers\KantinController@index');

Route::get('/perpustakaan','App\Http\Controllers\PerpusController@index');
Route::get('/ruangterbuka','App\Http\Controllers\RuangTerbukaController@index');


Route::get('/f', function () {
    return view('fasilitas');
});


/*Admin */
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('profil')->middleware('auth');


Route::get('/AdminAkomodasi', [App\Http\Controllers\AdminAkomodasiController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminAkomodasi/tambah', [App\Http\Controllers\AdminAkomodasiController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminAkomodasi/simpan', [App\Http\Controllers\AdminAkomodasiController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminAkomodasi/hapus/{id}', [App\Http\Controllers\AdminAkomodasiController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminAkomodasi/ubah/{id}', [App\Http\Controllers\AdminAkomodasiController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminAkomodasi/update/{id}', [App\Http\Controllers\AdminAkomodasiController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminAsrama', [App\Http\Controllers\AdminAsramaController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminAsrama/tambah', [App\Http\Controllers\AdminAsramaController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminAsrama/simpan', [App\Http\Controllers\AdminAsramaController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminAsrama/hapus/{id}', [App\Http\Controllers\AdminAsramaController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminAsrama/ubah/{id}', [App\Http\Controllers\AdminAsramaController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminAsrama/update/{id}', [App\Http\Controllers\AdminAsramaController::class, 'update'])->name('profil')->middleware('auth');




