<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'start' => $this->faker->dateTimeBetween('2022-05-7', '2022-05-7'),
            'end' => $this->faker->dateTimeBetween('2022-05-7', '2022-05-7'),
        ];
    }
}
