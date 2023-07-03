<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class NewsiteController extends Controller
{
    public function index(){

        $title = "Mohammed";
        $subtitle = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita doloremque quam nemo ";

   return view('site.index', compact('title','subtitle'));
// return view('site.master');
    }

public function about(){
return view('site.about');
}

public function post($title){
return view('site.post')->with('title', $title);
}

public function contact(){
return view('site.contact');
}

}
