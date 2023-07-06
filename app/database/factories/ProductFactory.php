<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'price' => 8.99,
            'idUser' => $this->faker->randomDigit(),
            'idCategory' => $this->faker->randomDigit(),
        ];
    }
}
