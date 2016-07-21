<?php

// Generic Thread
$factory->define(App\Thread::class, function (Faker\Generator $faker)
{
    $categories = ['Assignments', 'Exams', 'Lecture Material','Labs', 'Complaints and Feedback', 'Other'];
    return [
        'title'=> $faker->sentence(),
        'body' => $faker->paragraph(),
        'category' => $categories[array_rand($categories)],
    ];
});