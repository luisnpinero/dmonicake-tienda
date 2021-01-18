<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return "vista dashboard categories";
    // return view('index');
    }

    public function create(){
        return "vista dashboard categories create";
    // return view('index');
    }

    public function view($category){
        return "vista dashboard category view {$category}";
        // return view('index');
    }

    public function edit($category){
        return "vista dashboard categories {$category}";
        // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($category){
        // return view('index')
    }

    public function delete($category){
        //
    }
}
