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
        return [
            //
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 5, 500),
            'stock' => $this->faker->numberBetween(10, 200),
            'image' => $this->faker->imageUrl(400, 400, 'products', true),
            'seller_id' => User::factory()->state(['role' => 'seller']),
        ];
    }
}
