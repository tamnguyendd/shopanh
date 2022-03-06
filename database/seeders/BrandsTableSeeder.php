<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Apple', 'Dell', 'HP', 'Acer', 'Lenovo', 'Samsung', 'Sony', 'Xiaomi', 'Canon', 'Nikon', 'Sennheiser'];

        foreach ($brands as $brand)
        {
            Brand::create([
                'name'      =>  $brand,
                'slug'      =>  strtolower($brand),
                'logo'      =>  'brands/' . strtolower($brand) . '_logo.jpg'
            ]);
        }
    }
}
