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
    $rower = new Rower(2);
    //$id = $rower->getId();

    return view('rowery', ['title' => 'ROWERY', 'id' => $rower->getId()]);
});

Route::get('/ogrod', function () {
    return view('ogrod', ['title' => 'OGRÓD']);
});
