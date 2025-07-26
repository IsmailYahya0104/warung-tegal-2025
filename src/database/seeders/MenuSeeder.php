<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = Categorie::all()->keyBy('name');

        Menu::insert([
            [
                'name' => 'Nasi Putih',
                'description' => 'Nasi putih hangat',
                'price' => 5000,
                'stock' => 100,
                'categorie_id' => $categories['Makanan Berat']->id,
            ],
            [
                'name' => 'Ayam Goreng',
                'description' => 'Ayam goreng krispi',
                'price' => 10000,
                'stock' => 50,
                'categorie_id' => $categories['Lauk Pauk']->id,
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Teh manis dingin',
                'price' => 3000,
                'stock' => 60,
                'categorie_id' => $categories['Minuman']->id,
            ],
        ]);
    }
}
