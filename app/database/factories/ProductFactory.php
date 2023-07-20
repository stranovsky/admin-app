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
            'productName' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'price' => 8.99,
            'idUser' => 1,
            'idCategory' => 1
        ];
    }
}
