<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/persyaratan', function () {
//     return view('persyaratan');

// Route::get('/portal', function () {
//     return view('portal');
// });
route::get('/dashboard', [SiswaController::class, 'dashboard']);



route::get('/index', [SiswaController::class, 'index']);
route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
route::get('/pendaftaran', [SiswaController::class, 'pendaftaran']);
