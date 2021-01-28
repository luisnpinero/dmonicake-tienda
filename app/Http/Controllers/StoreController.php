<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Cost;
use App\Models\Currency;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::paginate(12);
        $costs = Cost::all();
        $currencies = Currency::all();

        return view('store.index')->with([
            'categories' => $categories,
            'products' => $products,
            'costs' => $costs,
            'currencies' => $currencies,
            ]);
    }

    public function create(){
        return "vista dashboard user create";
        // return view('index');
    }

    public function show_product($product){
        //$category = Category::where('name',$category)->first();
        $product = Product::where('name',$product)->first();
        $cost = Cost::find($product->cost_id)->first();
        $currency = Currency::find($cost->currency_id)->first();
        return view('store.show')->with([
            'product' => $product,
            'cost' => $cost,
            'currency' => $currency,
        ]);
    }

    public function categories($category){
        $category = Category::where('name', $category)->first();
        $products = Product::where('category_id',$category->id)->get();
        $costs = Cost::all();
        $currencies = Currency::all();

        return view('store.categories')->with([
            'category' => $category,
            'products' => $products,
            'costs' => $costs,
            'currencies' => $currencies,
        ]);
    }

    public function edit($user){
        return "vista dashboard user edit {$user}";
        // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($user){
        // return view('index')
    }

    public function destroy($user){
        //
    }
}
