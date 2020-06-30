<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Product;




	// Home
	Route::get('/', function () {
		return view('home');
	}, )->name('home');

	// About Us
	Route::get('/about', function(){
			return view('about');
	},)->name('about');

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



Route::get('locale/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

