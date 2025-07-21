<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RiwayatPasienController;

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


Route::middleware(['guest'])->group(function() {
    Route::get('/', [AuthenticationController::class, 'index'])->name('login');
    Route::post('/', [AuthenticationController::class, 'authenticate']);
    Route::resource('/register', RegisterController::class)->names('register');
});

Route::middleware(['auth', 'is_admin'])->group(function() {
    Route::resource('/penyakit', PenyakitController::class)->names('penyakit');
    Route::resource('/gejala', GejalaController::class)->names('gejala');
    Route::resource('/pengetahuan', PengetahuanController::class)->names('pengetahuan');
    Route::resource('/pasien', PasienController::class)->names('pasien');
});

Route::middleware(('auth'))->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/home', [DashboardController::class, 'index']);
    Route::get('/diagnosis', [DiagnosisController::class, 'index'])->name('diagnosis');
    Route::post('/diagnosis/proses', [DiagnosisController::class, 'proses'])->name('diagnosis.proses');
    Route::post('/riwayatpasien/tambah', [RiwayatPasienController::class, 'store'])->name('riwayatpasien.tambah');
    Route::get('/riwayatpasien/{id_pasien}', [RiwayatPasienController::class, 'index'])->name('riwayatpasien');
    Route::get('/logout', [AuthenticationController::class, 'logout']);
});




