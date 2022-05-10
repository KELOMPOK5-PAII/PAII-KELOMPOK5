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
Route::get('/akomodasi/rumahtamu','App\Http\Controllers\RumahTamuController@index');
Route::get('/akomodasi/rumahdosen','App\Http\Controllers\RumahDosenController@index');

Route::get('/gedung','App\Http\Controllers\GedungController@index');
Route::get('/laboratorium','App\Http\Controllers\LaboratoriumController@index');
Route::get('/perpustakaan','App\Http\Controllers\PerpusController@index');
Route::get('/ruangterbuka','App\Http\Controllers\RuangTerbukaController@index');
Route::get('/denah','App\Http\Controllers\DenahController@index');
Route::get('/auditorium','App\Http\Controllers\AuditController@index');
Route::get('/klinik','App\Http\Controllers\KlinikController@index');
Route::get('/possatpam','App\Http\Controllers\PosController@index');
Route::get('/koperasi','App\Http\Controllers\KoperasiController@index');
Route::get('/parkirandantransportasi','App\Http\Controllers\ParkirandanTransportasiController@index');

//tampil untuk admin index untuk pengguna
//tampil untuk pengguna index untuk admin OT
Route::get('/saran', 'App\Http\Controllers\SaranController@index');
Route::post('/saran/simpan', 'App\Http\Controllers\SaranController@store');

//pengguna
Route::get('/datasaran', 'App\Http\Controllers\SaranController@tampil');
Route::get('/datasaran/hapus/{id}', 'App\Http\Controllers\SaranController@destroy');
Route::post('/saran/simpan', 'App\Http\Controllers\SaranController@store');


Route::get('/f', function () {
    return view('fasilitas');
});


/*Admin */
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('profil');
