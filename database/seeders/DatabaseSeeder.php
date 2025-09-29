<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 1 Admin
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        // Create 5 Sellers with Products
        $sellers = User::factory(5)->create(['role' => 'seller']);
        $sellers->each(function ($seller) {
            Product::factory(10)->create(['seller_id' => $seller->id]);
        });

        // Create 10 Buyers with Orders
        $buyers = User::factory(10)->create(['role' => 'buyer']);
        $buyers->each(function ($buyer) {
            $orders = Order::factory(3)->create(['buyer_id' => $buyer->id]);

            $orders->each(function ($order) {
                OrderItem::factory(2)->create(['order_id' => $order->id]);
            });
        });

        // Add Reviews
        Review::factory(30)->create();
    }
}