<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'phone'=>$this->faker->randomNumber(7, true),
            'age'=>$this->faker->numberBetween(1,100),
            'appointment'=>$this->faker->date(),
        ];
    }
}
