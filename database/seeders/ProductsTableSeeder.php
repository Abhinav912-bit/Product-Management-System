<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "category_id" => 1,
                "name" => "Apple",
                "price" => 20,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 1,
                "name" => "Bannana",
                "price" => 40,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 1,
                "name" => "Mango",
                "price" => 55,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 1,
                "name" => "Strawberry",
                "price" => 120,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 4,
                "name" => "Dairy Milk",
                "price" => 85,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 4,
                "name" => "5 star",
                "price" => 25,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 3,
                "name" => "BMW",
                "price" => 150,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 3,
                "name" => "Mercedes",
                "price" => 250,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 3,
                "name" => "Hyundai",
                "price" => 50,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 2,
                "name" => "Brinjal",
                "price" => 250,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "category_id" => 2,
                "name" => "ladyFingure",
                "price" => 250,
                "created_at" => now(),
                "updated_at" => now()
            ],

        ];

        Product::insert($products);
    }
}
