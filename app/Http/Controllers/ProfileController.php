<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function chart(){
			return view('profileCart');
	}

	public function checkout(){
			return view('profileCheckout');
	}

	public function wishlist(){
			return view('profileWishlist');
	}
}
