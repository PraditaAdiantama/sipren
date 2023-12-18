<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
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
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', [GuruController::class, 'index']);
    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
    Route::get('/presensi-data/{presensi}', [PresensiController::class, 'show'])->name('presensi-data');

    Route::post('/classes', [KelasController::class, 'index'])->name('class.grade');
    Route::post('/mapels', [MapelController::class, 'store'])->name('mapels.store');
    Route::put('/presensi/{presensi}', [PresensiController::class, 'update'])->name('presensi.update');

    Route::delete('/presensi/{id}', [PresensiController::class, 'destroy'])->name('presensi.delete');
});