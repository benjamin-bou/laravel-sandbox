<?php

namespace App\Models;

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
}
