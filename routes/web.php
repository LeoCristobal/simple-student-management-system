<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GradeLevelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/grade-levels', GradeLevelController::class);

Route::get('/{grade_level:grade_levels}/sections', [SectionController::class, 'index']);
Route::get('/section/{section:sections}', [SectionController::class, 'show']);

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});
