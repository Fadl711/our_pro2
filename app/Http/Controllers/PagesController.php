<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function wel(){
      $name = [5,4,3,2,3,4,5,3,];

        return view('pages.welcome')->with('name',$name);
    }
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
}
