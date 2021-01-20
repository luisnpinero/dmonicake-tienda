<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'=> $this->faker->address,
            'city'=> $this->faker->city,
            'province'=> $this->faker->state,
            'country'=> $this->faker->randomElement(['Venezuela']),
        ];
    }
}
