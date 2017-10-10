<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/**
 * Add worker
 */
$factory->define(App\Model\Worker::class, function (Faker\Generator $faker) {
    return [
        'worker_lname' => $faker->lastName,
        'worker_fname' => $faker->firstName,
        'worker_mname' => $faker->lastName,
        'worker_age' => rand(18, 35),
        'worker_role_id' => rand(1,5),
    ];
});