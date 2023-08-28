<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomName = $this->faker->name();
        return [
            'categoryName' => $randomName,
            'description' => $this->faker->sentence(),
            'slug' => Category::generate_slug($randomName),
            'idUser' => 1
        ];
    }
}
