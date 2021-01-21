<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "vista dashboard user";
        // return view('index');
    }

    public function create(){
        return "vista dashboard user create";
        // return view('index');
    }

    public function show($user){
        return "vista dashboard user view {$user}";
        // return view('index');
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
