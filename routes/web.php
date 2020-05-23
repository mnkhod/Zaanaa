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

// Home
Route::get('/', function () {
    return view('home');
});

// About Us
Route::get('/about', function(){
		return view('about');
});

// Contact Us
Route::get('/contact', function(){
		return view('contact');
});

// FAQ
Route::get('/faq', function(){
		return view('faq');
});

// Terms and Conditions
Route::get('/terms', function(){
		return view('terms');
});


Route::get('/products','ProductController@all');
Route::get('/products/compare','ProductController@compare');
Route::get('/products/{id}','ProductController@single');

Route::get('/categories','CategoryController@all');

Route::get('/profile/chart','ProfileController@chart');
Route::get('/profile/checkout','ProfileController@checkout');
Route::get('/profile/wishlist','ProfileController@wishlist');

Route::get('/blogs','BlogController@all');
Route::get('/blogs/{id}','BlogController@single');

// Authentication routes...
Route::post('auth/login', 'AuthController@login')->name('login');
Route::post('auth/register', 'AuthController@register')->name('register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
