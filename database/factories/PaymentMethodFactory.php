<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentMethod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['debito', 'credito','transferencia','efectivo','paypal']),
            'status'  => $this->faker->boolean($chanceOfGettingTrue = 75),
            'modified_by' => $this->faker->randomDigitNotNull,
        ];
    }
}
