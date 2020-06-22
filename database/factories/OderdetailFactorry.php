<?php

use Faker\Generator as Faker;
use App\Models\Oderdetail;

$factory->define(Oderdetail::class, function (Faker $faker) {
    return [
        'order_number'=>$faker->unique()->numberBetween(1,1000),
        'quantily_odered'=>$faker->numberBetween(1,50),
        'price_each'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100) ,
        'orderline_number'=>$faker->numberBetween(1,100),


    ];
});
