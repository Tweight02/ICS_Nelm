<?php

use App\Http\Controllers\PastorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('pastor', [PastorController::class, 'getPastor']);

Route::get('pastor/{id}', [PastorController::class, 'getPastorbyId']);

Route::post('addPastor', [PastorController::class, 'addPastor']);

Route::put('updatePastor/{id}', [PastorController::class, 'updatePastor']);

Route::delete('deletePastor/{id}', [PastorController::class, 'deletePastor']);