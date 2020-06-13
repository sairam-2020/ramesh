<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
return view('pages/home',['name' => 'Ramesh','about' => 'He is very Decent and nice man. I like him very much and i love him']);

    }
    public function about()
    {
return view('pages/about',['name' => 'Ramesh','about' => 'He is very Decent and nice man. I like him very much and i love him']);

    }
    public function contact()
    {
return view('pages/contact',['name' => 'Ramesh','about' => 'He is very Decent and nice man. I like him very much and i love him']);

    }
}
