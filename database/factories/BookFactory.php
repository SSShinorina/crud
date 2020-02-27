<?php


$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => str_random(10),
        'type' => str_random(10),
        'author' => str_random(10),
    ];
});


