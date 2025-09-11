<?php

use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoEvaChinoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludo', [SaludoController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/saludoeva', [SaludoEvaChinoController::class, 'index']);