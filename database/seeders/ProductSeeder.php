<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProduct = [
            [
                'name' => 'Elementor Pro',
                'harga' => 700000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bootcamp',
                'harga' => 395000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Elementor Pro dan Bootcamp',
                'harga' => 1095000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Product::insert($dataProduct);
    }
}
