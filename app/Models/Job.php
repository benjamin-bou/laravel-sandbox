<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
