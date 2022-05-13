<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'user_id'=> 1,
            'birth' => '2021-02-28',
            'sex' => 'female',
            'image' => 'default.jpg',
            'num_id' => '1282827365325'
        ];
    }
}
