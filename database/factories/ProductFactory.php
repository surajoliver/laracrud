<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
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
        $user = fake()->randomDigit() > 5? User::first(): User::latest();
        
        return [
            'name' => 'product ' . fake()->word,
            'description' => fake()->realText(30),
            'price' => fake()->numberBetween(1, 20) * 100 + 99,
            'active' => fake()->numberBetween(1,10) > 7 ? true: false,
            'status' => fake()->randomElement(['available', 'out-of-stock', 'discontinued']),
            //'user_id' => $user['id'],


        ];
    }
}
