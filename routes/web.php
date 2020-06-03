<?php

use Illuminate\Support\Facades\Route;
use App\Product;

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
    $featured = Product::where('id',1)->get(); 
    $onSale = Product::where('id',2)->get(); 
    $topRated = Product::where('id',3)->get(); 
    
    return view('home', [ 'featured' => $featured , 'sale' => $onSale, 'top' => $topRated] );
})->name('home');

// About Us
Route::get('/about', function(){
		return view('about');
})->name('about');

// Contact Us
Route::get('/contact', function(){
		return view('contact');
})->name('contact');

// FAQ
Route::get('/faq', function(){
		return view('faq');
})->name('faq');

// Terms and Conditions
Route::get('/terms', function(){
		return view('terms');
})->name('terms');

// Cart
Route::get('/profileCart', function(){
		return view('profileCart');
})->name('profileCart');


Route::get('/products','ProductController@all')->name('productArchive');
Route::get('/products/compare','ProductController@compare')->name('productCompare');
Route::get('/products/{id}','ProductController@single')->name('productSingle');

Route::get('/categories','CategoryController@all')->name('categories');

Route::get('/profile/cart','ProfileController@chart')->name('profileChart');
Route::get('/profile/checkout','ProfileController@checkout')->name('profileCheckout');
Route::get('/profile/wishlist','ProfileController@wishlist')->name('profileWishlist');

Route::get('/blogs','BlogController@all')->name('blogArchive');
Route::get('/blogs/{id}','BlogController@single')->name('blogSingle');

// Authentication routes...
Route::post('auth/login', 'AuthController@login')->name('login');
Route::post('auth/register', 'AuthController@register')->name('register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
