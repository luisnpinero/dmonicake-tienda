<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(){
        // $roles = DB::table('roles')->get();
        $roles = Role::all();
        dd($roles);
        return "vista dashboard roles";
        // return $roles; formato json
        // return view('index');
    }

    public function create(){
        return "vista dashboard roles create";
        // return view('index');
    }

    public function view($role){
        $role = Role::findOrFail($role);
        // $role = Role::find($role);
        // $role = DB::table('roles')->where('id', $role)->get();
        // $role = DB::table('roles')->find($role)->get();
        dd($role);
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

    public function destroy($role){
        //
    }
}
