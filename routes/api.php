<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::get('/categories', [\App\Http\Controllers\UtilityController::class, 'getCategories'])->name('api.categories');
Route::get('/regencies/{province}', [\App\Http\Controllers\UtilityController::class, 'regencies']);
Route::get('/districts/{regency}', [\App\Http\Controllers\UtilityController::class, 'districts']);
Route::get('/villages/{district}', [\App\Http\Controllers\UtilityController::class, 'villages']);
