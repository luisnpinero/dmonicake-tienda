<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::paginate(12);
        return view('store.index')->with([
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function create(){
        return "vista dashboard user create";
        // return view('index');
    }

    public function show_product($product){
        //$category = Category::where('name',$category)->first();
        $product = Product::where('name',$product)->first();
        //return "vista dashboard user view {$category} {$product}";
        return view('store.show')->with([
            'product' => $product,
        ]);
    }

    public function categories($category){
        $category = Category::where('name', $category)->first();
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
