<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Category Model ->> use HasFactory;
            'name'          =>  $this->faker->name,
            'description'   =>  $this->faker->realText(100),
            'parent_id'     =>  1,
            'menu'          =>  1,
        ];
    }
}
