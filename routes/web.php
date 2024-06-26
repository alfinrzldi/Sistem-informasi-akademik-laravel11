<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
    return view('dashboard', compact ('data'));
})->name('home')->middleware('auth');

Route::resource('/prodi', ProdiController::class)->except('index')->middleware('admin');
Route::get('/prodi', [ProdiController::class, 'index'])->middleware('auth');
Route::resource('/mahasiswa', MahasiswaController::class)->except('index')->middleware('admin');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);