<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Une route qui retourne une vue
Route::get('/about', function () {
    return view('about');
});

// Une route qui retourne une chaîne de caractères
Route::get('/about-string', function () {
    return 'About page';
});

// Une route qui retourne un tableau
Route::get('/about-array', function () {
    return ['name' => 'John', 'age' => 30];
});
