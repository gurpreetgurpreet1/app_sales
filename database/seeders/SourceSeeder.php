<?php

namespace Database\Seeders;

use App\Models\source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        source::factory()->count(30)->create();
    }
}
