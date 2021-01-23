<?php

namespace Database\Factories;

use App\Models\Cost;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cost' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 99),
            'created_at' => now(),
            'updated_at' => now(),
            'modified_by' => $this->faker->randomDigitNotNull,
        ];
    }
}
