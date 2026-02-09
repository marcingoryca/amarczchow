<?php

namespace Database\Seeders;

use App\Models\BikeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['category_id' => 1, 'category_name' => 'MTB'],
            ['category_id' => 2, 'category_name' => 'E-Bike'],
            ['category_id' => 3, 'category_name' => 'Cross'],
            ['category_id' => 4, 'category_name' => 'City'],
            ['category_id' => 5, 'category_name' => 'Kids'],
            ['category_id' => 6, 'category_name' => 'Trekking'],
            ['category_id' => 7, 'category_name' => 'Junior']
        ];

        foreach ($categories as $cats) {
            BikeCategory::create($cats);
        }
    }
}
