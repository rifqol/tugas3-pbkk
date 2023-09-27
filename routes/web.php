<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ShowController;

// Pasien image crud
route::get('pasiens', [PasienController::class, 'index']);
route::get('add-pasiens', [PasienController::class, 'create']);
route::post('add-pasiens', [PasienController::class, 'store']);
route::get('home', [ShowController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
