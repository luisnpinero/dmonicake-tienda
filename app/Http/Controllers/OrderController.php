<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return "vista dashboard orders";
        // return view('index');
    }

    public function create(){
        return "vista dashboard products create";
        // return view('index');
    }

    public function view($order){
        return "vista dashboard order view {$order}";
        // return view('index');
    }

    public function edit($order){
        return "vista dashboard orders {$order}";
    // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($order){
        // return view('index')
    }

    public function destroy($order){
        //
    }
}
