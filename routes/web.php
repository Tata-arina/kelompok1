<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

route::get('/index', [SiswaController::class, 'index']);
route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
route::get('/pendaftaran', [SiswaController::class, 'pendaftaran']);
route::get('/pengumuman', [SiswaController::class, 'pengumuman']);

Route::get('/pengumuman', [PengumumanController::class, 'pengumuman']);
Route::get('/createpengumuman', [PengumumanController::class, 'create']);
Route::get('/editpengumuman', [PengumumanController::class, 'edit']);

