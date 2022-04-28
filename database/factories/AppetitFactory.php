<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppetitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'appetit'=> 'bof',
            'pet_id'=> 1,
            'date' => '2021-02-28',
            'heure' => '12',
            'documents' => 'pres.pdf'
        ];
    }
}
