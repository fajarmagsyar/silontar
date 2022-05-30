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
Route::post('/pengajuan/store', [UserController::class, 'pengajuanStore']);
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/admin/beranda', [AdminController::class, 'beranda']);
Route::get('/admin/user', [AdminController::class, 'user']);
