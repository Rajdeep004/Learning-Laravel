<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Proj Manager',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Tutor',
                'salary' => '$30,000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Proj Manager',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$20,000'
        ],
        [
            'id' => 3,
            'title' => 'Tutor',
            'salary' => '$30,000'
        ],
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job',['job' => $job]);
});
