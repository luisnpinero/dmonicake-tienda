<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Currency;
use App\Models\Category;
use App\Models\Cart;
use App\Models\CategoryProduct;
use App\Models\Cost;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Role;
use App\Models\Image;
use App\Models\User;
use App\Models\Order;
use App\Models\CostOrder;
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
        
        $paymentmethods = PaymentMethod::factory(5)->create();

        $categories = Category::factory(5)->create();
        
        $currencies = Currency::factory(3)->create();

        // relcion 1-N
        $costs = Cost::factory(10)
            ->make()
            ->each(function($cost) use($currencies){
                $cost->currency_id = $currencies->random()->id;
                $cost->save();
            });

        //seeder 1-n entre user y rol
        //seeder 1-1 entre user y address
        $users = User::factory(10)
            ->make()
            ->each(function($user) use ($roles){
                $user->role_id = $roles->random()->id;
                $address = Address::factory()->create();
                $user->address_id = $address->id;
                $user->save();
            })
            ->each(function ($user) {
                $image = Image::factory()
                    ->user()
                    ->make();

                $user->image()->save($image);
            });

        $carts = Cart::factory(50)->create();

        $orders = Order::factory(25)
            ->make()
            ->each(function ($order) use ($users,$paymentmethods,$costs) {
                $order->user_id = $users->random()->id;
                $order->payment_method_id = $paymentmethods->random()->id;
                $order->save();
            });

        $products = Product::factory(50)
            ->create()
            ->each(function($product) use($carts, $orders){
                $cart = $carts->random();
                $cart->products()->attach([
                    $product->id => ['quantity' => mt_rand(1,3)]
                ]);

                $order = $orders->random();
                $order->products()->attach([
                    $product->id => ['quantity' => mt_rand(1,3)]
                ]);

                $images = Image::factory(mt_rand(2,4))->make();
                $product->images()->saveMany($images);
            });

        foreach($costs as $cost){
            foreach($orders as $order){
                CostOrder::firstOrCreate([
                    'cost_id'=>$cost->id,
                    'order_id'=>$order->id,
                ]);
            }
        };

        foreach($products as $product){
            foreach($categories as $category){
                CategoryProduct::firstOrCreate([
                    'product_id'=>$product->id,
                    'category_id'=>$category->id,
                ]);
            }
        };

    }
}
