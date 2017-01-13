<?php

// Generic User
$factory->define(App\User::class, function (Faker\Generator $faker)
{
    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'student_number' => $faker->unique()->randomNumber(8),
        'lab'            => 'L2' . $faker->randomElement($array = array ('A','B','C')),
        'email'          => $faker->safeEmail,
        'password'       => bcrypt('password'),
        'remember_token' => str_random(10),

    ];
});