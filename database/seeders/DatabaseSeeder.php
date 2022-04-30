<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use App\Models\Poids;
use App\Models\Wound;
use App\Models\Allergy;
use App\Models\Appetit;
use App\Models\Veterinary;
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

		Veterinary::create([
            'pet_id' => '1',
            'name'=> 'Juliette',
            'lastname' => 'Lenoyer',
            'adress'=> '92 avenue Jean Jaurès',
            'zipcode'=> '92140',
            'city' => 'Clamart',
            'phone' => '01 41 08 00 50',
            'email' => 'juliette.lenoyer@gmail.com',
            'image' => 'default-user.jpg'
		]);

		Wound::create([
            'name'=> 'Bras Casse',
            'pet_id'=> 1,
			'wound_date' => '2021-02-28',
			'healing_date' => '2021-04-28'
        ]);

		Appetit::factory()->count(3)->create();
		Poids::factory()->count(2)->create();
		Allergy::factory()->count(2)->create();
	}
}
