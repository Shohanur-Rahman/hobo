<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->sentence,
        'email' => $faker->unique()->safeEmail,
        'user_type' => \Illuminate\Support\Arr::random(['super-admin','admin','vendor','editor','developer','customer']),
        'is_active' => rand(0,1),
        'admin_comment' => $faker->paragraph,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\ProductTags::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'user_id' =>rand(0,7),
    ];
});

$factory->define(App\Models\User\UserProfile::class, function (Faker $faker) {

    return [
        'user_id' =>$faker->unique()->numberBetween(1,7),
    ];
});

