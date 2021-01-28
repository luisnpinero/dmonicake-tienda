<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $categories = Category::all();
<<<<<<< HEAD
        $products = Product::all();
        
=======
        $products = Product::paginate(12);
>>>>>>> 8417a9faa698e32ca418fa48a62625f8f09cce23
        return view('store.index')->with([
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function create(){
        return "vista dashboard user create";
        // return view('index');
    }

<<<<<<< HEAD
    public function product_show($product){
        $product = Product::where('name', $product)->first();
        return view('store.show')->with([
            'product' => $product,
        ]);
        // return view('index');
=======
    public function show_product($product){
        //$category = Category::where('name',$category)->first();
        $product = Product::where('name',$product)->first();
        //return "vista dashboard user view {$category} {$product}";
        return view('store.show')->with([
            'product' => $product,
        ]);
>>>>>>> 8417a9faa698e32ca418fa48a62625f8f09cce23
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
