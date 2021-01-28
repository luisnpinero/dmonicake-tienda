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
        $costs = Cost::all();
        $currencies = Currency::all();
        return view('store.show')->with([
            'product' => $product,
        ]);
    }

    public function categories($category){
        $category = Category::where('name', $category)->get('id');
        $pivot = CategoryProduct::where('category_id',2)->get();
        // $pivot->toArray();
        dd($category);
        
        $products = DB::table('products')
        ->where('id', $pivot->product_id);
        //$products = Product::all();
        //$products = each(function())
        //dd($products);
        
        // dd($category);
        return view('store.categories')->with([
            'category' => $category,
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
