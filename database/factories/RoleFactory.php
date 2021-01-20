<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->unique()->randomElement(['admin','user','payment']),
            'status' =>$this->faker->boolean($chanceOfGettingTrue = 99),
            'modified_by' =>$this->faker->randomDigitNotNull,
        ];
    }
}
