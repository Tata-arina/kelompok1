<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PendaftaranController;


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
Route::get('/index', function () {
    return view('admin.index');
});

route::get('/dashboard', [AdminController::class, 'dashboard']);
route::get('/adminpengumuman', [AdminController::class, 'adminpengumuman']);


Route::get('/pengumuman', [Pengumumancontroller::class, 'index']);
route::get('/datapengumuman', [PengumumanController::class, 'pengumuman']);
Route::get('/createpengumuman', [Pengumumancontroller::class, 'create']);
Route::get('/editpengumuman', [Pengumumancontroller::class, 'edit']);

route::get('/index', [SiswaController::class, 'index']);
route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
route::get('/pendaftaran', [SiswaController::class, 'pendaftaran']);
route::get('/pengumuman', [SiswaController::class, 'pengumuman']);

