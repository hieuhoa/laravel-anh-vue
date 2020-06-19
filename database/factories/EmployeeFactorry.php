<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
    
    
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'lastName'=> $faker->lastName,
            'firstName'=> $faker->firstName,
            'extension'=> $faker->sentence(),
            'office_code'=> $faker->sentence(),
            'reports_to'=> $faker->sentence(),
            'job_title'=> $faker->sentence(),
    
    ];
});
