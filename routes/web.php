<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\Tes;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['is_operator']], function () {
    Route::get('/admin', [Dashboard::class, 'main']);
});
Route::get('/login', [AuthController::class, 'index']);
Route::post('/do_login', [AuthController::class,'on_login']);
Route::post('/do_logout', [AuthController::class,'on_logout']);