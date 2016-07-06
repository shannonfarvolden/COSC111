<?php

// Generic User
$factory->define(App\User::class, function (Faker\Generator $faker)
{
    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'student_number' => $faker->unique()->randomNumber(8),
        'lab'            => 'L0' . $faker->numberBetween(1, 3),
        'email'          => $faker->safeEmail,
        'password'       => bcrypt('password'),
        'remember_token' => str_random(10),

    ];
});