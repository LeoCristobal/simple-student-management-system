<?php

use App\Http\Controllers\GradeLevelController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/grade-levels', GradeLevelController::class);

Route::get('/{grade_level:grade_levels}/sections', [SectionController::class, 'index']);
Route::get('/section/{section:sections}', [SectionController::class, 'show']);

// Route::controller()