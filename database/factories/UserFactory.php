<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Message::class, function(Faker $faker){
	return [
		'content' => $faker->realText(random_int(20,160)), // Texto de alicia en el pais
		'image' => $faker->imageUrl(600,338)
	];
	/*
	 * En consola indicamos:
	 * $ php artisan tinker
	 * 
	 * luego podemor probar mensaje por mensaje con: 
	 * $message = factory(App\Message::class)->make()
	 *
	 * Si probamos con create en vez de make obtenemos un objeto completo del 
	 * tipo message:
	 * $message = factory(App\Message::class)->create()
	 *
	 * Podemos buscarlo con:
	 * App\Message::find(5)
	 * 
	 * Si queremos correr multiples factories empleamos los seeds 
	 * con el comando:
	 * $ php artisan db:seed
	 * 
	 * Para hacer un reajuste usamos:
	 * $ php artisan migrate:refresh --seed
	 *
	 * 
	 */
});

