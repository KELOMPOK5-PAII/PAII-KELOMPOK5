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

Route::get('/AdminKantin', [App\Http\Controllers\AdminKantinController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminKantin/tambah', [App\Http\Controllers\AdminKantinController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminKantin/simpan', [App\Http\Controllers\AdminKantinController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminKantin/hapus/{id}', [App\Http\Controllers\AdminKantinController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminKantin/ubah/{id}', [App\Http\Controllers\AdminKantinController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminKantin/update/{id}', [App\Http\Controllers\AdminKantinController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminRumahDosen', [App\Http\Controllers\AdminRumahDosenController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminRumahDosen/tambah', [App\Http\Controllers\AdminRumahDosenController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminKanAdminRumahDosentin/simpan', [App\Http\Controllers\AdminRumahDosenController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminRumahDosen/hapus/{id}', [App\Http\Controllers\AdminRumahDosenController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminRumahDosen/ubah/{id}', [App\Http\Controllers\AdminRumahDosenController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminRumahDosen/update/{id}', [App\Http\Controllers\AdminRumahDosenController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminRumahTamu', [App\Http\Controllers\AdminRumahTamuController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminRumahTamu/tambah', [App\Http\Controllers\AdminRumahTamuController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminRumahTamu/simpan', [App\Http\Controllers\AdminRumahTamuController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminRumahTamu/hapus/{id}', [App\Http\Controllers\AdminRumahTamuController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminRumahTamu/ubah/{id}', [App\Http\Controllers\AdminRumahTamuController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminRumahTamu/update/{id}', [App\Http\Controllers\AdminRumahTamuController::class, 'update'])->name('profil')->middleware('auth');


Route::get('/AdminPerpus', [App\Http\Controllers\PerpusController::class, 'tampil'])->name('profil')->middleware('auth');
Route::get('/AdminPerpus/tambah', [App\Http\Controllers\PerpusController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminPerpus/simpan', [App\Http\Controllers\PerpusController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminPerpus/hapus/{id}', [App\Http\Controllers\PerpusController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminPerpus/ubah/{id}', [App\Http\Controllers\PerpusController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminPerpus/update/{id}', [App\Http\Controllers\PerpusController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminKoperasi', [App\Http\Controllers\AdminKoperasiController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminKoperasi/tambah', [App\Http\Controllers\AdminKoperasiController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminKoperasi/simpan', [App\Http\Controllers\AdminKoperasiController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminKoperasi/hapus/{id}', [App\Http\Controllers\AdminKoperasiController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminKoperasi/ubah/{id}', [App\Http\Controllers\AdminKoperasiController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminKoperasi/update/{id}', [App\Http\Controllers\AdminKoperasiController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminKlinik', [App\Http\Controllers\AdminKlinikController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminKlinik/tambah', [App\Http\Controllers\AdminKlinikController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminKlinik/simpan', [App\Http\Controllers\AdminKlinikController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminKlinik/hapus/{id}', [App\Http\Controllers\AdminKlinikController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminKlinik/ubah/{id}', [App\Http\Controllers\AdminKlinikController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminKlinik/update/{id}', [App\Http\Controllers\AdminKlinikController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminPosSatpam', [App\Http\Controllers\AdminPosSatpamController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminPosSatpam/tambah', [App\Http\Controllers\AdminPosSatpamController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminPosSatpam/simpan', [App\Http\Controllers\AdminPosSatpamController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminPosSatpam/hapus/{id}', [App\Http\Controllers\AdminPosSatpamController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminPosSatpam/ubah/{id}', [App\Http\Controllers\AdminPosSatpamController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminPosSatpam/update/{id}', [App\Http\Controllers\AdminPosSatpamController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminParkiran', [App\Http\Controllers\AdminParkiranController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminParkiran/tambah', [App\Http\Controllers\AdminParkiranController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminParkiran/simpan', [App\Http\Controllers\AdminParkiranController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminParkiran/hapus/{id}', [App\Http\Controllers\AdminParkiranController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminParkiran/ubah/{id}', [App\Http\Controllers\AdminParkiranController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminParkiran/update/{id}', [App\Http\Controllers\AdminParkiranController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminHiburanOlahraga', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminHiburanOlahraga/tambah', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminHiburanOlahraga/simpan', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminHiburanOlahraga/hapus/{id}', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminHiburanOlahraga/ubah/{id}', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminHiburanOlahraga/update/{id}', [App\Http\Controllers\AdminHiburanOlahragaController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminAudiotorium', [App\Http\Controllers\AuditController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminAudiotorium', [App\Http\Controllers\AuditController::class, 'tampil'])->name('profil')->middleware('auth');
Route::get('/AdminAudiotorium/tambah', [App\Http\Controllers\AuditController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminAudiotorium/simpan', [App\Http\Controllers\AuditController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminAudiotorium/hapus/{id}', [App\Http\Controllers\AuditController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminAudiotorium/ubah/{id}', [App\Http\Controllers\AuditController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminAudiotorium/update/{id}', [App\Http\Controllers\AuditController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminLaboratorium', [App\Http\Controllers\AdminLaboratoriumController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminLaboratorium/tambah', [App\Http\Controllers\AdminLaboratoriumController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminLaboratorium/simpan', [App\Http\Controllers\AdminLaboratoriumController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminLaboratorium/hapus/{id}', [App\Http\Controllers\AdminLaboratoriumController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminLaboratorium/ubah/{id}', [App\Http\Controllers\AdminLaboratoriumController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminLaboratorium/update/{id}', [App\Http\Controllers\AdminLaboratoriumController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminGedung', [App\Http\Controllers\AdminGedungController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminGedung/tambah', [App\Http\Controllers\AdminGedungController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminGedung/simpan', [App\Http\Controllers\AdminGedungController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminGedung/hapus/{id}', [App\Http\Controllers\AdminGedungController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminGedung/ubah/{id}', [App\Http\Controllers\AdminGedungController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminGedung/update/{id}', [App\Http\Controllers\AdminGedungController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminRuangTerbuka', [App\Http\Controllers\AdminRuangTerbukaController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminRuangTerbuka/tambah', [App\Http\Controllers\AdminRuangTerbukaController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminRuangTerbuka/simpan', [App\Http\Controllers\AdminRuangTerbukaController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminRuangTerbuka/hapus/{id}', [App\Http\Controllers\AdminRuangTerbukaController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminRuangTerbuka/ubah/{id}', [App\Http\Controllers\AdminRuangTerbukaController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminRuangTerbuka/update/{id}', [App\Http\Controllers\AdminRuangTerbukaController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminDenah', [App\Http\Controllers\AdminDenahController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminDenah/tambah', [App\Http\Controllers\AdminDenahController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminDenah/simpan', [App\Http\Controllers\AdminDenahController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminDenah/hapus/{id}', [App\Http\Controllers\AdminDenahController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminDenah/ubah/{id}', [App\Http\Controllers\AdminDenahController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminDenah/update/{id}', [App\Http\Controllers\AdminDenahController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminPerkembangan', [App\Http\Controllers\AdminPerkembanganController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminPerkembangan/tambah', [App\Http\Controllers\AdminPerkembanganController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminPerkembangan/simpan', [App\Http\Controllers\AdminPerkembanganController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminPerkembangan/hapus/{id}', [App\Http\Controllers\AdminPerkembanganController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminPerkembangan/ubah/{id}', [App\Http\Controllers\AdminPerkembanganController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminPerkembangan/update/{id}', [App\Http\Controllers\AdminPerkembanganController::class, 'update'])->name('profil')->middleware('auth');

Route::get('/AdminSaran', [App\Http\Controllers\AdminSaranController::class, 'index'])->name('profil')->middleware('auth');
Route::get('/AdminSaran/tambah', [App\Http\Controllers\AdminSaranController::class, 'create'])->name('profil')->middleware('auth');
Route::post('/AdminSaran/simpan', [App\Http\Controllers\AdminSaranController::class, 'store'])->name('profil')->middleware('auth');
Route::get('/AdminSaran/hapus/{id}', [App\Http\Controllers\AdminSaranController::class, 'destroy'])->name('profil')->middleware('auth');
Route::get('/AdminSaran/ubah/{id}', [App\Http\Controllers\AdminSaranController::class, 'edit'])->name('profil')->middleware('auth');
Route::post('/AdminSaran/update/{id}', [App\Http\Controllers\AdminSaranController::class, 'update'])->name('profil')->middleware('auth');
