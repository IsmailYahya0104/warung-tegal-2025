<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::insert([
            ['name' => 'Budi Santoso', 'phone' => '081234567890'],
            ['name' => 'Siti Aminah', 'phone' => '082345678901'],
        ]);
    }
}
