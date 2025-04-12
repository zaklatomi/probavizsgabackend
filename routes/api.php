<?php

use App\Http\Controllers\TevekenysegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tevekenysegek', [TevekenysegController::class, 'index']);

Route::post('/tevekenyseg', [TevekenysegController::class, 'store']);

Route::delete('/tevekenyseg/{id}', [TevekenysegController::class, 'destroy']);

Route::put('/tevekenysegek/{id}', [TevekenysegController::class, 'update']);
