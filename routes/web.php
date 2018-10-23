<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/submit', function (Request $request) {
    
    return redirect()->to('bedankt')->with( ['bedrag' => $request->input('bedrag')] );;
});

Route::get('/bedankt', function () {
    dd(Session::get('bedrag'));
    return view('bedankt');
});