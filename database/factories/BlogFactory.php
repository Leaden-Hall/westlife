<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'summary' => $faker->paragraphs(rand(2,10), true),
        'logo' => $faker->sentence(1),
        'content' => $faker->paragraphs(rand(2,20), true),
        'published_by' => "thanh",
    ];
});
