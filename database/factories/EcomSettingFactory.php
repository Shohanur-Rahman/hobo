<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\EcomSetting::class, function (Faker $faker) {

    return [
        'currency_id' =>1,
        'shipping_cost'=>0,
        'outer_city_shipping_cost'=>0,
        'admin_email'=>'admin@gmail.com'
    ];
});
