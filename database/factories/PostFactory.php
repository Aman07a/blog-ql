<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'content' => $faker->paragraph(10, true),
        'lead' => $faker->text(100),
        'author_id' => $faker->numberBetween(1, 20),
        'topic_id' => $faker->numberBetween(1, 3),
    ];
});
