<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(){
			return view('productArchive');
		}

    public function single($id){
			return view('productSingle');
		}
}
