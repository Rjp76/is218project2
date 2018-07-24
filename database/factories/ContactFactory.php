<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'Subject' =>$faker->text(20),
        'message' => $faker->paragraph($nbSentences =3, $variableNbSentences=true),
    ];
});
