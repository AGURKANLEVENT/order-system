<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Laptop', 'price' => 15000, 'amount' => 10]);
        Product::create(['name' => 'Akıllı Telefon', 'price' => 8000, 'amount' => 25]);
        Product::create(['name' => 'Tablet', 'price' => 5000, 'amount' => 15]);
        Product::create(['name' => 'Akıllı Saat', 'price' => 2000, 'amount' => 30]);
        Product::create(['name' => 'Bluetooth Kulaklık', 'price' => 500, 'amount' => 50]);
    }
}