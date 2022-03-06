<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = Carbon::now();
        
        Sale::create([
            'title'         =>      'Hello Autumn',
            'description'   =>      'Let us change your style for wellcome a happy, funny autumn',
            'sale_exp'      =>      $d->addDay(12),
            'active'        =>      1
        ]);
    }
}
