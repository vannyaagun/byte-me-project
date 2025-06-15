<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\JadwalVaksinController;
use App\Http\Controllers\RestController;

Route::get('/', function () {
    return view('register');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/data-diri', [DataDiriController::class, 'show'])->name('data.diri');
Route::post('/data-diri', [DataDiriController::class, 'store'])->name('data-diri.store');

Route::get('/JadwalVaksin', [JadwalVaksinController::class, 'show'])->name('JadwalVaksin');

Route::get('/detail', [detailController::class, 'show'])->name('detail');

Route::get('/homepage', [RestController::class, 'show_homepage'])->name('homepage');
Route::get('/kontak', [RestController::class, 'show_kontak'])->name('kontak');
Route::get('/edukasi', [RestController::class, 'show_edukasi'])->name('edukasi');
Route::get('/lokasi', [RestController::class, 'show_lokasi'])->name('lokasi');
Route::get('/varian', [RestController::class, 'show_varian'])->name('varian');

