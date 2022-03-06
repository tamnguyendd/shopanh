<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = ['Laptops', 'Phones', 'Cameras'];

        foreach ($slides as $slide)
        {
            Slide::create([
                'title'      =>  $slide,
                'link'       =>  'http://localhost/category/'.strtolower($slide),
                'image'      =>  'slides/' . strtolower($slide) . '_slide.jpg'
            ]);
        }
    }
}
