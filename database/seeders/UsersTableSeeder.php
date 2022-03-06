<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $users = [
            'Yamamoto' => 'Haruto',
            'Ishibe' => 'Mio',
            'Narashi' => 'Souta',
            'Akiba' => 'Ichika',
            'Saitou' => 'Haruki',
            'Iwamoto' => 'Hana',
            'Tomishima' => 'Yuito',
            'Kaimori' => 'Aoi',
        ];

        foreach ($users as $lname => $fname)
        {
            User::create([
                'first_name'     =>  $fname,
                'last_name'      =>  $lname,
                'email'         =>  strtolower($lname).'@example.com',
                'password'      =>  bcrypt('12345678'),
                'address'       =>  $faker->address,
                'city'          =>  $faker->city,
                'country'       =>  $faker->country,
                'zip'           =>  $faker->postcode,
                'phone'         =>  $faker->numerify('0##-####-####'),
                'gender'        =>  rand(0,1)
            ]);
        }
    }
}
