<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //please provide me number of category

        $categories = [
            [
                "name" => "Fruits",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Vegetables",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Cars",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Choaclates",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        Category::insert($categories);
    }
}
