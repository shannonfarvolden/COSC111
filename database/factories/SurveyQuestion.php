<?php

// Generic Survey Question
$factory->define(App\SurveyQuestion::class, function (Faker\Generator $faker)
{
    return ['question' => $faker->words(8, true).'?'];
});