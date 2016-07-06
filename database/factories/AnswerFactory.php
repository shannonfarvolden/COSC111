<?php

// Generic Answer
$factory->define(App\Answer::class, function (Faker\Generator $faker)
{
    return ['answer' => $faker->sentence(6)];
});