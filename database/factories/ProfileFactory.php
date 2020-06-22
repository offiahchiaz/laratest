<?php

use App\Profile;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Profile::class, function (Faker $faker) {
    
    return [
        'user_id' =>  $faker->shuffle(array(1, 2, 3, 1, 5, 2, 7, 8, 1)),
        'state' => $faker->sentence,
        'tribe' => $faker->paragraph,
        'age' => 24,
        'residence' => $faker->city,
        'preference' => $faker->text,
    ];
});
