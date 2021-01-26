<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 999),
            'status' => $this->faker->boolean($chanceOfGettingTrue = 99),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
