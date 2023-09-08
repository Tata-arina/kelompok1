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

route::get('/dashboard', [AdminController::class, 'dashboard']);
route::get('/pengumuman', [AdminController::class, 'pengumuman']);

route::get('/index', [SiswaController::class, 'index']);
route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
route::get('/pendaftaran', [SiswaController::class, 'pendaftaran']);
route::get('/pengumuman', [SiswaController::class, 'pengumuman']);

