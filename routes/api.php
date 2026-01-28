<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [\App\Http\Controllers\UtilityController::class, 'getCategories'])->name('api.categories');
Route::get('/regencies/{province}', [\App\Http\Controllers\UtilityController::class, 'regencies']);
Route::get('/districts/{regency}', [\App\Http\Controllers\UtilityController::class, 'districts']);
Route::get('/villages/{district}', [\App\Http\Controllers\UtilityController::class, 'villages']);
