<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(){
        return "vista dashboard paymentmethods";
        // return view('index');
    }

    public function create(){
        return "vista dashboard crear paymentmethods";
        // return view('index');
    }

    public function view($paymentmethod){
        return "vista dashboard payment {$paymentmethod}";
        // return view('index');
    }

    public function edit($paymentmethod){
        return "vista dashboard paymentmethods {$paymentmethod}";
        // return view('index');
    }

    public function store(){
        // return view('index');
    }

    public function update($paymentmethod){
        // return view('index')
    }

    public function destroy($paymentmethod){
        //
    }
}
