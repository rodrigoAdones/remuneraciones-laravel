<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Remuneracion\Entidades\Trabajador;

class TrabajadorTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			$trabajador=Trabajador::create([
				'nombre'	=>	$faker->name,
				'rut'	=>	$faker->numberBetween($min = 11111111, $max = 100000000),
				'email'	=>	$faker->email,
				'cargo'	=>	'Empleado',
				'sueldo_base'	=>	$faker->numberBetween($min = 500000, $max = 1500000),
				'empresa_id'	=>	$faker->randomElement([1, 2, 3])
			]);
		}
	}

}