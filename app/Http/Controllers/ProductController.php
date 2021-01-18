<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "vista dashboard products por controlador";
        // return view('index');
    }

    public function create(){
        return "vista dashboard products create";
        // return view('index');
    }

    public function view($product){
        return "vista dashboard products view {$product}";
        // return view('index');
    }

    public function edit($product){
        return "vista dashboard products {$product}";
        // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($product){
        // return view('index')
    }

    public function delete($product){
        //
    }
}
