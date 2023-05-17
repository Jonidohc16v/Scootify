<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*HELLO WORLD!*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/price', function() {
    return view('price');
});


Route::get('/faq', function(){
    return view('faq');
});


Route::get('/contactus', function() {

    return view('contactus');
});

Route::get('/how-it-works', function(){
    return view('how-it-works');
});
