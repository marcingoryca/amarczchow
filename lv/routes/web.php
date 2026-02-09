<?php

use Illuminate\Support\Facades\Route;
use App\Models\Rower;

Route::get('/r', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/rowery', function () {
    return view('rowery');
});

Route::get('/ogrod', function () {
    return view('ogrod', ['title' => 'OGRÓD']);
});
