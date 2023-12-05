<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', [GuruController::class, 'index']);
    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
});
