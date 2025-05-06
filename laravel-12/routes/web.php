<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/fakultas',FakultasController::class);
Route::resource('/mahasiswa',MahasiswaController::class);
Route::resource('/prodi',ProdiController::class);