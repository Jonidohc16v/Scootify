<?php

use App\Http\Controllers\ContactUs;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PlanController;







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

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


Route::get('/how-it-works', function(){
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


// google
Route::get('stations', [GoogleController::class, 'index']);

// User Page
Route::get('/user', function(){
    return view('users/user');
});

  
// Log In User
Route::post('/login', [UserController::class, 'authenticate']);


/////// EDIT ////////////


Route::middleware(['auth'])->group(function () {
    Route::get('edit',[UserController::class,'index'])->name('edit');
    Route::post('edit/{user}',[UserController::class,'update'])->name('edit.update');
  });


//   Subscriptions//   
Route::middleware("auth")->group(function () {
Route::get('plans',[PlanController::class,'index'])->name('plans');
Route::post('/checkout/{plan_id}', [PlanController::class, 'checkout'])->name('checkout');
Route::get('/success',[PlanController::class,'success'])->name('checkout.success');
Route::get('/checkout',[PlanController::class,'checkout'])->name('checkout.cancel');
});