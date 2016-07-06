<?php

// Generic Survey Answer
$factory->define(App\SurveyAnswer::class, function (Faker\Generator $faker)
{
    return ['answer' => $faker->sentence(6)];
});