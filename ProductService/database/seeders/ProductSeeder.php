<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Keyboard Gaming', 'price' => 250000]);
        Product::create(['name' => 'Mouse Wireless', 'price' => 150000]);
    }
}
