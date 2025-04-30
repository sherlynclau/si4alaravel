<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () { //utk di web
    return view ('profil'); //samain kek view
});
 
Route::resource('/fakultas', FakultasController::class);
Route::resource('/prodi', ProdiController::class);