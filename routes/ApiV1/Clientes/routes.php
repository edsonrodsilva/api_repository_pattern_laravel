<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiV1\ClientController;

Route::get('clientes', [ClientController::class, 'index']);
Route::get('clientes/{id}', [ClientController::class, 'show']);
Route::post('clientes', [ClientController::class, 'store']);
Route::put('clientes/{id}', [ClientController::class, 'update']);
Route::delete('clientes/{id}', [ClientController::class, 'destroy']);
