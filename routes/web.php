<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Une route qui retourne une vue
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => 120000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => 130000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'salary' => 140000,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ]

        ]
    ]);
});

// Une route qui prend un paramètre
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'PHP Developer',
            'salary' => 120000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 2,
            'title' => 'Python Developer',
            'salary' => 130000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ],
        [
            'id' => 3,
            'title' => 'Java Developer',
            'salary' => 140000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]

    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
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
