<?php

namespace Database\Factories;

use App\Models\productCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //  User::all()->random()->id,
        return [
            'category' => productCategory::all()->random()->id,
            'name' => fake()->name(),
            'photo' => fake()->image('public/images',400,300,null,false),
            'price' => fake()->randomNumber(3),
        ];
    }
}
