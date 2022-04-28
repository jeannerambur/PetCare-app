<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use App\Models\Appetit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name'=> 'toto',
			'email'=> 'toto@gmail.com',
			'password'=> Hash::make('totototo'),
			'image' => 'default-user.jpg',
			'about' => null
		]);

		User::create([
			'name'=> 'Jeanne',
			'email'=> 'jeanne_rambur@hotmail.fr',
			'password'=> Hash::make('Jeannette'),
			'image' => 'default-user.jpg',
			'about' => null
		]);

		Pet::factory()->count(2)->create();

		Appetit::factory()->count(1)->create();
	}
}
