<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AutocompleteController extends Controller
{
    public function index(Request $request) { 
        return view("auto-complete");
    }
}