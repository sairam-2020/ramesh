<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//this return welcome blade file inside views folder

//Route::get('/', function () {
  //  return view('pages/home',['name' => 'Ramesh','about' => 'He is very Decent and nice man. I like him very much and i love him']);
//});

Route::get('/','PageController@home');
/*Route::get('contact', function () {
   return view('pages/contact');
});
Route::get('about', function () {
    return view('pages.about');
});*/
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/team','PageController@team');