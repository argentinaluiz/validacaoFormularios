<?php

use Faker\Generator as Faker;

require_once  __DIR__ . './../faker_data/document_number.php';

$factory->define(\App\Client::class, function (Faker $faker) {

    $cpfs = cpfs();
    return [
        'name' => $faker->name,
        'document_number' => $cpfs[array_rand($cpfs,1)],
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0, 1),
        'data_birth' => $faker->date(),
        'sex' => rand(1, 10) % 2 == 0 ? 'm': 'f',
        'marital_status' => rand(1, 3),
        'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null,


    ];
});
/*$table->string('name');
$table->string('document_number.php'); //modoficar tamanho do campo cpf e cnpj
$table->string('email');
$table->string('phone');
$table->boolean('defaulter');//inadimplente
$table->date('data_birth');
$table->char('sex', 1);
$table->enum('marital_status', array_keys(\APP\Client::MARITAL_STATUS));
$table->string('physical_disability');*/
