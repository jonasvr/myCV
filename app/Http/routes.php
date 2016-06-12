<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/script', function () {
    return view('script');
});

Route::get('/download', function(){
    return response()->download('/download/cv.pdf');
});


Route::get('/thesedays',function(){
    return Redirect::to('http://www.thesedays.com');
});

Route::get('/tdAbout',function(){
    return Redirect::to('http://thesedays.com/about');
});
Route::get('/tino',function(){
    return Redirect::to('www.on-itservices.be');
});