<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('store.index')->with([
            'categories' => $categories
        ]);
    }

    public function create(){
        return "vista dashboard user create";
        // return view('index');
    }

    public function show($user){
        return "vista dashboard user view {$user}";
        // return view('index');
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
