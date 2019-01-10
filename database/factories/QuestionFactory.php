<?php

use App\Models\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\App;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), '.'),
        'body' => $faker->paragraphs(rand(3, 7), true),
        'views' =>  rand(0, 10),
        'answers' => rand(0, 10),
        'vote' =>  rand(-3, 10),
    ];
});
