<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Currency;
use App\Models\PaymentMethod;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $paymentmethods = PaymentMethod::factory(5)->create();
        $addresses = Address::factory(10)->create();
        $role = Role::factory(3)->create();
        $category = Category::factory(5)->create();
        $currency = Currency::factory(3)->create();
    }
}
