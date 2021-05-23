<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [AuthController::class, 'getLogin'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/storelogin', [AuthController::class, 'postLogin'])->name('storelogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/peserta/tambah', [App\Http\Controllers\PesertaController::class, 'tambah'])->name('peserta.tambah');

Route::middleware('auth:pegawai')->group(function () {
    Route::get('/jadwal/lihat/{pegawai}', [App\Http\Controllers\JadwalController::class, 'lihat'])->name('jadwal.index');
    Route::get('/jadwal/index/tambah', [App\Http\Controllers\JadwalController::class, 'indextambah'])->name('jadwal.indextambah');
    Route::post('/jadwal/tambah', [App\Http\Controllers\JadwalController::class, 'tambah'])->name('jadwal.tambah');
    Route::get('jadwal/edit/{jadwal:id_jadwal}', [App\Http\Controllers\JadwalController::class, 'edit'])->name('jadwal.edit');
    Route::patch('jadwal/update/{jadwal:id_jadwal}', [App\Http\Controllers\JadwalController::class, 'update'])->name('jadwal.update');
    Route::get('jadwal/hapus/{jadwal:id_jadwal}', [App\Http\Controllers\JadwalController::class, 'hapus'])->name('jadwal.hapus');
    Route::get('jadwal/cari/', [App\Http\Controllers\JadwalController::class, 'cari'])->name('jadwal.cari');
    Route::get('jadwal/cetak/{jadwal:id_jadwal}', [App\Http\Controllers\JadwalController::class, 'cetak'])->name('jadwal.cetak');

    Route::get('/peserta/lihat/{pegawai}', [App\Http\Controllers\PesertaController::class, 'lihat'])->name('peserta');
    Route::post('/peserta/index/tambah', [App\Http\Controllers\PesertaController::class, 'tambah2'])->name('peserta.tambah2');
    Route::get('/peserta/cari', [App\Http\Controllers\PesertaController::class, 'cari'])->name('peserta.cari');
    Route::get('peserta/edit/{peserta:id}', [App\Http\Controllers\PesertaController::class, 'edit'])->name('peserta.edit');
    Route::patch('peserta/update/{peserta:id}', [App\Http\Controllers\PesertaController::class, 'update'])->name('peserta.update');
    Route::get('peserta/hapus/{peserta:id}', [App\Http\Controllers\PesertaController::class, 'hapus'])->name('peserta.hapus');
    Route::get('peserta/cetak/{peserta:id}', [App\Http\Controllers\PesertaController::class, 'cetak'])->name('peserta.cetak');

    Route::get('/hasil/tambah', [App\Http\Controllers\HasilController::class, 'tambah'])->name('hasil.tambah');
    Route::get('hasil/edit/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'edit'])->name('hasil.edit');
    Route::patch('hasil/update/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'update'])->name('hasil.update');
    Route::get('hasil/hapus/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'hapus'])->name('hasil.hapus');
    Route::get('hasil/verifikasi/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'verifikasi'])->name('hasil.verifikasi');
    Route::patch('hasil/keluarkanhpp/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'keluarkanhpp'])->name('hasil.keluarkanhpp');
    Route::get('/hasil/lihat/{pegawai}', [App\Http\Controllers\HasilController::class, 'lihat'])->name('hasil');
    Route::get('hasil/cari/', [App\Http\Controllers\HasilController::class, 'cari'])->name('hasil.cari');
    Route::get('hasil/detail/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'detail'])->name('hasil.detail');
});
Route::get('hasil/cetak/{hasil:id_hasil}', [App\Http\Controllers\HasilController::class, 'cetak'])->name('hasil.cetak');

Route::middleware('auth:peserta')->group(function () {
    Route::get('/jadwalpeserta/index/{peserta}', [App\Http\Controllers\JadwalController::class, 'jadwalpeserta'])->name('jadwalpeserta');
    Route::get('/lihat/index/{peserta}', [App\Http\Controllers\SoalController::class, 'lihat'])->name('lihat.soal');
    Route::get('/lihat/petunjuk/{peserta}', [App\Http\Controllers\SubtesController::class, 'lihatpetunjuk'])->name('lihat.petunjuk');
    Route::get('/pindahsoal/{subtes:id_subtes}', [App\Http\Controllers\SoalController::class, 'pindahsoal'])->name('pindah.soal');
    Route::get('/simpanjawaban/index/{peserta}', [App\Http\Controllers\JawabanController::class, 'simpanjawaban'])->name('simpan.jawaban');
});

Route::get('/dashboard/pegawai/{pegawai}', 'DashboardController@indexpegawai')->name('dashboard.pegawai');
Route::get('/dashboard/peserta/{peserta}', 'DashboardController@indexpeserta')->name('dashboard.peserta');
Auth::routes();
Route::get('/hasilpeserta/lihat/{peserta}', [App\Http\Controllers\HasilController::class, 'hasilpeserta'])->name('hasilpeserta');


Route::get('/skoring', [App\Http\Controllers\JawabanController::class, 'skoring'])->name('skoring');
