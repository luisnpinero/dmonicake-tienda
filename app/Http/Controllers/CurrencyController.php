<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(){
        return "vista dashboard currency";
    // return view('index');
    }

    public function create(){
        return "vista dashboard currency create";
    // return view('index');
    }

    public function show($currency){
        return "vista dashboard currency view {$currency}";
        // return view('index');
    }

    public function edit($currency){
        return "vista dashboard currency {$currency}";
        // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($currency){
        // return view('index')
    }

    public function destroy($currency){
        //
    }
}
