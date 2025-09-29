<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'buyer_id' => User::factory()->state(['role' => 'buyer']),
            'total' => $this->faker->randomFloat(2, 20, 1000),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered']),
        ];
    }
}
