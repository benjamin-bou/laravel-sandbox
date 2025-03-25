<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Une route qui retourne une vue
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

// Une route qui prend un paramètre
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

// Une route qui retourne une chaîne de caractères
Route::get('/about-string', function () {
    return 'About page';
});

// Une route qui retourne un tableau
Route::get('/about-array', function () {
    return ['name' => 'John', 'age' => 30];
});

Route::get('/contact', function () {
    return view('contact');
});
