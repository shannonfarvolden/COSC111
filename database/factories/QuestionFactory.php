<?php

// Generic Question
$factory->define(App\Question::class, function (Faker\Generator $faker)
{
    return ['question' => $faker->words(8, true).'?'];
});