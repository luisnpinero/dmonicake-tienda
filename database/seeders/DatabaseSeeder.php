<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Currency;
use App\Models\Category;
use App\Models\Cost;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
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

        $roles = Role::factory(3)->create();
        $addresses = Address::factory(15)->create();        
        $paymentmethods = PaymentMethod::factory(5)->create();
        $categories = Category::factory(5)->create();
        $currencies = Currency::factory(3)->create();

        $costs = Cost::factory(10)
            ->make()
            ->each(function($cost) use($currencies){
                $cost->currency_id = $currencies->random()->id;
                $cost->save();
            });

        $users = User::factory(10)
            ->make()
            ->each(function($user) use ($roles, $addresses){
                $user->role_id = $roles->random()->id;
                $user->address_id = $addresses->random()->id; // como hago para hacer una relacion 1-1
                $user->save();
            });

        $products = Product::factory(50)
            ->create()
            ->each(function($product) use($categories){
                $category = $categories->random();
                $category->products()->attach([
                    $product->id
                ]);
            });


    }
}
