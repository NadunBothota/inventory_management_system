<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemCategory;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemCategory::firstOrCreate(['name' => 'Electronics']);
        ItemCategory::firstOrCreate(['name' => 'Clothing']);
        ItemCategory::firstOrCreate(['name' => 'Books']);
        ItemCategory::firstOrCreate(['name' => 'Furniture']);
        ItemCategory::firstOrCreate(['name' => 'Other']);
    }
}
