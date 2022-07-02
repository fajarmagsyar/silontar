<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->middleware('exposure');
Route::get('/registrasi', [AuthController::class, 'daftar'])->middleware('exposure');
Route::post('/registrasi', [AuthController::class, 'daftarStore'])->middleware('exposure');
Route::get('/login', [UserController::class, 'login'])->middleware('exposure');
Route::get('/lupa-password', [UserController::class, 'lupaPassword'])->middleware('exposure');
Route::get('/pengajuan', [UserController::class, 'pengajuan'])->middleware('exposure');
Route::get('/pengajuan/list', [UserController::class, 'pengajuanListAll'])->middleware('exposure');
Route::get('/pengajuan/list/{id}', [UserController::class, 'pengajuanList'])->middleware('exposure');
Route::post('/pengajuan/store', [UserController::class, 'pengajuanStore'])->middleware('exposure');
Route::post('/auth', [AuthController::class, 'login'])->middleware('exposure');
Route::post('/auth/verifikasi-token', [AuthController::class, 'verifikasiToken'])->middleware('exposure');
Route::post('/auth/reset-pass', [AuthController::class, 'resetPassword'])->middleware('exposure');
Route::post('/auth/reset-pass/store/{token}', [AuthController::class, 'resetPasswordStore'])->middleware('exposure');
Route::get('/reset-password/{token}', [AuthController::class, 'resetForm'])->middleware('exposure');
Route::get('/verifikasi-akun', [AuthController::class, 'verifikasiTokenPage'])->middleware('exposure');
Route::get('/kirim-token', [AuthController::class, 'kirimToken'])->middleware('exposure');
Route::post('/profil/ubahpassword', [UserController::class, 'ubahPassword'])->middleware('exposure');
Route::get('/profil', [UserController::class, 'profil'])->middleware('exposure');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('exposure');
Route::post('/uploadSurat/{id}', [UserController::class, 'mulaiKerjaUpload'])->middleware('exposure');
Route::post('/uploadBerkas/{id}', [UserController::class, 'berkasUpload'])->middleware('exposure');
Route::get('/faq', [UserController::class, 'faq'])->middleware('exposure');


Route::prefix('admin')->middleware('exposure')->group(function () {
    Route::get('/beranda', [AdminController::class, 'beranda']);
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/pengajuan', [AdminController::class, 'pengajuan']);
    Route::get('/pengajuan/detail/{id}', [AdminController::class, 'pengajuanDetail']);
    Route::post('/pengajuan/detail/{id}/store', [AdminController::class, 'pengajuanDetailStore']);
    Route::post('/pengajuan/detail/{id}/tolak', [AdminController::class, 'pengajuanDetailTolak']);
    Route::post('/pengajuan/detail/{id}/terima', [AdminController::class, 'pengajuanDetailTerima']);
    Route::post('/pengajuan/detail/{id}/update', [AdminController::class, 'pengajuanDetailUpdate']);
    Route::get('/profil', [AdminController::class, 'profil']);
    Route::post('/pengajuan/detail/{id}/komentar', [AdminController::class, 'komentarSimpan']);
    Route::get('/export/excel', [AdminController::class, 'exportExcel']);
    Route::get('/cetak_laporan', [AdminController::class, 'cetak_laporan']);
    Route::get('/dokumen', [AdminController::class, 'dokumen']);
    Route::post('/dokumen/store', [AdminController::class, 'dokumenStore']);
});
