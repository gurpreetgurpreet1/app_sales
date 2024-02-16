<?php

namespace Database\Seeders;

use App\Models\productCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productCategory::factory()->count(30)->create();
    }
}
