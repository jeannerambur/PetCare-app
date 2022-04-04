<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
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
			'password'=> Hash::make('totototo')
		]);

		Pet::factory()->count(10)->create();
	}
}
