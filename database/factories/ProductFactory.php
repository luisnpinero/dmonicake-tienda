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
        return [
            'name' => $this->faker->words($nb = mt_rand(1,3), $asText = true),
            'description' => $this->faker->sentence(mt_rand(15, 25)),
            'stock' => $this->faker->randomDigit,
            'updated_at' => now(),
            'created_at' => now(),
            'modified_by' => $this->faker->boolean($chanceOfGettingTrue = 75),
        ];
    }
}
