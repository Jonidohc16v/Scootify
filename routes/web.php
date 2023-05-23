<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactUs;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\RideController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\ContactUsController;


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

Route::get('/price', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


Route::get('/how-it-works', function () {
    return view('how-it-works');
});



//contactUs form
Route::get('/contactus', [ContactUsController::class, 'create']);

//contactUs sendig message
Route::post('/contactus', [ContactUsController::class, 'store']);

// Create New User
Route::post('/register', [UserController::class, 'store']);

// Create New User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// googlemap
Route::get('/stations', [GoogleController::class, 'index']);


//station 
 Route::get('/station', function(){
     return view('station');
 });


Route::get('/ride', [StationController::class, 'index']);

Route::post('/ride', [RideController::class, 'store'])->name('store.ride');


