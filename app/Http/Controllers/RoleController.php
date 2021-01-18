<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return "vista dashboard roles";
        // return view('index');
    }

    public function create(){
        return "vista dashboard roles create";
        // return view('index');
    }

    public function view($role){
        return "vista dashboard role view {$role}";
        // return view('index');
    }

    public function edit($role){
        return "vista dashboard roles {$role}";
        // return view('index');role
    }

    public function store(){
        // return view('index');
    }

    public function update($role){
        // return view('index')
    }

    public function delete($role){
        //
    }
}
