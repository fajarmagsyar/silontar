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

Route::get('/', [UserController::class, 'index']);
Route::get('/registrasi', [AuthController::class, 'daftar']);
Route::post('/registrasi', [AuthController::class, 'daftarStore']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/pengajuan', [UserController::class, 'pengajuan']);
Route::get('/pengajuan/list', [UserController::class, 'pengajuanList']);
Route::post('/pengajuan/store', [UserController::class, 'pengajuanStore']);
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/profil', [UserController::class, 'profil']);
Route::post('/profil/ubahpassword', [UserController::class, 'ubahPassword']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/uploadSurat/{id}', [UserController::class, 'mulaiKerjaUpload']);
Route::post('/uploadBerkas/{id}', [UserController::class, 'berkasUpload']);


Route::prefix('admin')->group(function () {
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
});
