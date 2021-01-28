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
            'name' => $this->faker->unique()->randomElement(['Tarjeta de Débito', 'Tarjeta de Crédito','Transferencia Bancaria','Contra entrega','Paypal']),
            'status'  => $this->faker->boolean($chanceOfGettingTrue = 99),
            'modified_by' => $this->faker->randomDigitNotNull,
        ];
    }
}
