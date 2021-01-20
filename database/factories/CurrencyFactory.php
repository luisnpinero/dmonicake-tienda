<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Currency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->unique()->randomElement(['USD','VEF','PEN']),
            'status' =>$this->faker->boolean($chanceOfGettingTrue = 99),
            'modified_by' =>$this->faker->randomDigitNotNull,
        ];
    }
}
