<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
{
    Brand::create(['name' => 'Nike', 'country' => 'Verenigde Staten', 'description' => 'Bekend van de Air Max.']);
    Brand::create(['name' => 'Adidas', 'country' => 'Duitsland', 'description' => 'Het merk met de drie strepen.']);
    Brand::create(['name' => 'Puma', 'country' => 'Duitsland', 'description' => 'Bekend van de Suede sneakers.']);
    Brand::create(['name' => 'Reebok', 'country' => 'Verenigd Koninkrijk', 'description' => 'Bekend van de Classic sneakers.']);
    Brand::create(['name' => 'New Balance', 'country' => 'Verenigde Staten', 'description' => 'Bekend van de 990-serie.']);
}
    }
}
