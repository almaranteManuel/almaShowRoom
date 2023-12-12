<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::create([
            'name' => 'Remera',
            'description' => 'Remera de verano',
            'price' => 12.75,
            'stock' => 100,
            'is_stock' => true,
        ]);
        Product::create([
            'name' => 'Pantalon',
            'description' => 'Remera de verano',
            'price' => 12.75,
            'stock' => 100,
            'is_stock' => true,
        ]);
        Product::create([
            'name' => 'Short',
            'description' => 'Remera de verano',
            'price' => 12.75,
            'stock' => 100,
            'is_stock' => true,
        ]);
        Product::create([
            'name' => 'Babucha',
            'description' => 'Remera de verano',
            'price' => 12.75,
            'stock' => 100,
            'is_stock' => true,
        ]);
    }
}
