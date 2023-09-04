<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controller\SiswaController;

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
    return view('index');
});

Route::get('/persyaratan', function () {
return view('persyaratan');
});

// route::get('/index', [SiswaController::class, 'index']);
// route::get('/persyaratan', [SiswaController::class, 'persyaratan']);
