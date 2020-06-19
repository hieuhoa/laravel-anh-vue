<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
    

            'last_name'=> $faker->name,
            'first_name'=> $faker->name,
            'extension'=> $faker->extension,
            'email' => $faker->unique()->safeEmail,
            'office_code'=> $faker->name,
            'reports_to'=> $faker->name,
            'job_title'=> $faker->name,
    
    ];
});
