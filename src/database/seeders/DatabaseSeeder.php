<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        CategorieSeeder::class,
        MenuSeeder::class,
        CustomerSeeder::class,
        OrderSeeder::class,
        RoleSeeder::class,
        UserSeeder::class,
        
    ]);
    }
}
