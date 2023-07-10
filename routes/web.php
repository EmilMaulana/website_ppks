<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\ArtikelController;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/', [FrontController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);


// Rute untuk redirect ke Google OAuth
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
// Rute callback untuk menerima data dari Google OAuth
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [ProfileController::class, 'index']);
Route::get('/home/riwayat-laporan', [RiwayatController::class, 'index']);

// admin
Route::get('/home/laporan-masuk', [AdminLaporanController::class, 'index'])->middleware('admin');
Route::get('/home/laporan-masuk/{laporan:id}', [AdminLaporanController::class, 'show'])->middleware('admin');
Route::put('/update/status_id/{laporan:id}', [AdminLaporanController::class, 'update'])->middleware('admin');
Route::get('/home/artikel', [ArtikelController::class, 'index'])->middleware('admin');

Route::get('/lapor', [LaporanController::class, 'index'])->name('lapor');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan')->middleware('auth');
