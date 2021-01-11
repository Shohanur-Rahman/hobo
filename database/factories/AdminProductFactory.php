<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Models\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {

	$title =$faker->title;
    return [
        'title' => $title,
        'short_description' => $faker->sentence(10),
        'description' => $faker->paragraph(300),
        'slug' => Str::slug($title),
        'is_published' => rand(0,1),
        'featured_image' => 'http://lorempixel.com/600/410/food/',
	    ];
});
