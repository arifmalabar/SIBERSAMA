<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\Tes;
use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\guru\DashboardGuru;
use App\Http\Controllers\siswa\DashboardSiswa;
use App\Http\Controllers\kepala_sekolah\DashboardKepsek;

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

Route::get('/', [AuthController::class, 'index']);
Route::group(['middleware' => ['is_operator']], function () {
    Route::get('/admin', [Dashboard::class, 'main']);
    Route::get('/guru', [GuruController::class, 'index']);
    Route::get('/kepangkatan', [KepangkatanController::class, 'index']);
});
Route::group(['middleware' => ['is_guru']], function(){
    Route::get('/guru', [DashboardGuru::class, 'index']);
});
Route::group(['middleware' => ['is_siswa']], function(){
    Route::get('/siswa', [DashboardSiswa::class, 'index']);
});
Route::group(['middleware' => ['is_kepsek']], function (){
    Route::get('/kepala_sekolah', [DashboardKepsek::class, 'index']);
});
Route::get('/login', [AuthController::class, 'index']);
Route::post('/do_login', [AuthController::class,'on_login']);
Route::post('/do_logout', [AuthController::class,'on_logout']);