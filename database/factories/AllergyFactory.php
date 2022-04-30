<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllergyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=> 'Rage',
            'pet_id'=> 1,
            'name' => 'rage',
            'date' => '2021-02-28'
        ];
    }
}
