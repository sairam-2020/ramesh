<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set("Asia/Calcutta");
        $Hour=date('G');
        
return view('pages.home',
[
    'name' => 'Ramesh',
    'about' => 'He is very Decent and nice man. I like him very much and i love him',
    'hour' => $Hour
    ]);

    }
    public function about()
    {
return view('pages.about');

    }
    public function contact()
    {
return view('pages.contact');

    }
    public function team()
    {
return view('pages.team',[
    'totalmembers'=>20
]);

    }
}
