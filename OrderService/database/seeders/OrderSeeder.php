<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::create(['product_id' => 1, 'quantity' => 2, 'total_price' => 500000]);
        Order::create(['product_id' => 2, 'quantity' => 1, 'total_price' => 150000]);
    }
}
