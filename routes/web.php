<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/landing');
});

Route::get('/landing',[LandingController::class,'index']);

Route::get('/menu/{category?}',[MenuController::class,'index']);

Route::get('/cart',[CartController::class,'index']);
Route::post('/cart/add/{id}',[CartController::class,'add']);
Route::get('/cart/update/{id}/{action}',[CartController::class,'update']);
Route::get('/cart/remove/{id}',[CartController::class,'remove']);

Route::post('/checkout',[OrderController::class,'checkout']);
Route::get('/invoice/{id}',[OrderController::class,'invoice']);

// Sidebar pages (optional)
Route::view('/about','sidebar.about');
Route::view('/contact','sidebar.contact');
Route::view('/address','sidebar.address');
Route::view('/career','sidebar.career');
