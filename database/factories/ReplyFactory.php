<?php

// Generic Reply
$factory->define(App\Reply::class, function (Faker\Generator $faker)
{
    return ['body' => $faker->sentence()];
});