<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create(['name' => 'Ahmet', 'surname' => 'Yılmaz']);
        Customer::create(['name' => 'Gurkan', 'surname' => 'Levent']);
        Customer::create(['name' => 'Velı', 'surname' => 'Celık']);
    }
}
