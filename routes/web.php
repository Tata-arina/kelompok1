<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PengumumanController;


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

// route calon siswa
route::get('/', [SiswaController::class, 'index']);
route::get('/index', [SiswaController::class, 'index']);
route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
route::get('/pendaftaran', [SiswaController::class, 'pendaftaran']);
route::get('/pengumuman', [SiswaController::class, 'pengumuman']);

// route admin
Route::get('/datapengumuman', [PengumumanController::class, 'index']);
Route::get('/createpengumuman', [PengumumanController::class, 'create']);
Route::get('/editpengumuman/{id}', [PengumumanController::class, 'edit']);
Route::post('/savepengumuman', [PengumumanController::class, 'store']);
Route::put('/updatepengumuman/{id}', [PengumumanController::class, 'update']);
Route::get('/deletepengumuman/{id}', [PengumumanController::class, 'destroy']);

Route::get('/user', [Controller::class, 'index']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
