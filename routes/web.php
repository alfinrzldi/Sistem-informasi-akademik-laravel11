<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;


Route::get('/', function () {
    $data = ['nama' => '', 'foto' =>'MYMOOD.jpg'];
    return view('dashboard', compact ('data')); 
});

Route::get('/mahasiswa', function () {
    $data = ['nama' => '', 'foto' =>'MYMOOD.jpg'];
    return view('mahasiswa', compact ('data')); 
});

// Route::get('/prodi', function () {
//     $data = ['nama' => '', 'foto' =>'opp.jpeg'];
//     return view('prodi', compact ('data')); 
// });



Route::get('mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('prodi', 'App\Http\Controllers\ProdiController@index');

Route::get('/data', [MahasiswaController::class, 'index']);
Route::get('/data/{id}', [MahasiswaController::class, 'show']);

// Route::get('/prodi', [ProdiController::class, 'index']);
// Route::get('/prodi/create', [ProdiController::class, 'create']);
// Route::post('/prodi', [ProdiController::class, 'store']);



Route::resource('/prodi', ProdiController::class);


Route::resource('/mahasiswa', MahasiswaController::class);


