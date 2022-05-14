<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Claw;
use App\Models\Dent;
use App\Models\User;
use App\Models\Poids;
use App\Models\Wound;
use App\Models\Litter;
use App\Models\Allergy;
use App\Models\Appetit;
use App\Models\Treatment;
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
			'name'=> 'username',
			'email'=> 'username@gmail.com',
			'password'=> Hash::make('motdepasse'),
			'about' => null
		]);

		User::create([
			'name'=> 'Jeanne',
			'email'=> 'jeanne.r@free.fr',
			'password'=> Hash::make('Jeannette'),
			'about' => null
		]);

		Pet::create([
			'name'=> 'Miho',
            'user_id'=> 1,
            'birth' => '2021-02-28',
            'sex' => 'female',
            'image' => 'default-user.jpg'
		]);

		Pet::create([
			'name'=> 'Bibou',
            'user_id'=> 1,
            'birth' => '2022-04-22',
            'sex' => 'male',
            'image' => 'default-user.jpg'
		]);

		Veterinary::create([
            'pet_id' => '1',
            'name'=> 'Juliette',
            'lastname' => 'Lenoyer',
            'adress'=> '92 avenue Jean Jaurès',
            'zipcode'=> '92140',
            'city' => 'Clamart',
            'phone' => '01 41 08 00 50',
            'email' => 'juliette.lenoyer@gmail.com'
		]);

		Wound::create([
            'name'=> 'Plaie',
            'pet_id'=> 1,
			'date' => '2022-04-14',
			'healing_date' => '2022-04-28'
		]);

		Treatment::create([
            'name'=> 'Pensement',
            'pet_id'=> 1,
			'date' => '2022-02-28',
			'quantite' => '2'
		]);

		Claw::create([
            'pet_id'=> 1,
			'date' => '2022-04-18'
		]);

		Litter::create([
            'pet_id'=> 1,
			'date' => '2022-05-02'
		]);

		Dent::create([
            'pet_id'=> 1,
			'date' => '2022-04-21'
		]);

		Appetit::create([
			'appetit'=> 'bof',
            'pet_id'=> 1,
            'date' => '2021-02-15',
            'heure' => '12'
		]);

		Appetit::create([
			'appetit'=> 'moyen',
            'pet_id'=> 1,
            'date' => '2022-04-13',
            'heure' => '12'
		]);

		Poids::create([
			'pet_id'=> 1,
            'poids'=> '3',
            'date' => '2022-05-22',
		]);
		Poids::create([
			'pet_id'=> 2,
            'poids'=> '7',
            'date' => '2022-05-01',
		]);

		Allergy::factory()->count(2)->create();

	}
}
