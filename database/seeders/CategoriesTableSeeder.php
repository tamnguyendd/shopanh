<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);

        Category::create([
            'name'          =>  'Laptops',
            'description'   =>  'This is the Laptops category, don\'t delete this one',
            'parent_id'     =>  1,
            'menu'          =>  1,
            'featured'      =>  1,
            'image'         =>  'categories/laptop.png',
        ]);

        Category::create([
            'name'          =>  'Phones',
            'description'   =>  'This is the Phones category, don\'t delete this one',
            'parent_id'     =>  1,
            'menu'          =>  1,
            'featured'      =>  1,
            'image'         =>  'categories/phone1.jpg',
        ]);

        Category::create([
            'name'          =>  'Cameras',
            'description'   =>  'This is the Cameras category, don\'t delete this one',
            'parent_id'     =>  1,
            'menu'          =>  1,
            'featured'      =>  1,
            'image'         =>  'categories/camera.png',
        ]);

        Category::create([
            'name'          =>  'Accessories',
            'description'   =>  'This is the Accessories category, don\'t delete this one',
            'parent_id'     =>  1,
            'menu'          =>  1,
            'featured'      =>  1,
        ]);

        // factory('App\Models\Category', 10)->create();
        //\App\Models\Category::factory()->count(5)->create(); 
    }
}
