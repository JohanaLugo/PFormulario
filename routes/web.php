<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/form', [ClienteController::class, 'form'])->name('datosarea');
Route::post('/calculaarea', [ClienteController::class, 'calculaArea'])->name('calculaarea');

Route::get('/log', [ClienteController::class, 'log'])->name('datossesion');
Route::post('/iniciosesion', [ClienteController::class, 'inicioSesion'])->name('iniciosesion');
Route::post('/nocontra', [ClienteController::class, 'noContraseña'])->name('nocontra');
Route::post('/nocorreo', [ClienteController::class, 'noCorreo'])->name('nocorreo');

Route::get('/', [ClienteController::class, 'inicio'])->name('principal');
Route::get('/P', [ClienteController::class, 'planti']);