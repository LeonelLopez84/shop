<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->sentence();
        return [
            'name' => $name,
            'slug' => $name,
            'price' => $this->faker->numerify(),
            'description' => $this->faker->text(200),
            'thumbnail' => $this->faker->image('storage/app/photos',640,480, null, false),
        ];
    }
}
