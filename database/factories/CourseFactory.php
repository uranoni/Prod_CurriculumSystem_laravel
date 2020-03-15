<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\User;
use Faker\Generator as Faker;
// composer require bluemmb/faker-picsum-photos-provider

$factory->define(Course::class, function (Faker $faker) {
    $user = User::where('role', '=', 'teacher')->firstOrFail();
    $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));
    return [
        'title' => $faker->words(3, true),
        'description' => $faker->text(200),
        'imgsrc'=>$faker->imageUrl(500,500) ,
        'user_id'=> $user->id,
        'date_begin' => now(),
        'date_end' => $faker->dateTimeBetween('now', '+1 month'),
    ];
});
