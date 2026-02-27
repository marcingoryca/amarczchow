<?php

use Illuminate\Support\Facades\Route;
use App\Models\Rower;
use App\Http\Controllers\BikeCategoriesController;

Route::get('/r', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/rowery', [BikeCategoriesController::class, 'index']);

Route::get('/ogrod', [GardenCategoriesController::class, 'index']);
