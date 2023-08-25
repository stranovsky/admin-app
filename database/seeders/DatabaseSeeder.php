<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(
            [
                'email' => 'port@manteau',
                'password' => bcrypt('12345678'),
                'isAdmin' => false
            ]);
        \App\Models\User::factory()->create(
            [
                'email' => 'admin@admin',
                'password' => bcrypt('admin'),
                'isAdmin' => True
            ]
        );
        \App\Models\Category::factory(2)->create();
        \App\Models\Product::factory(2)->create();
    }
}
