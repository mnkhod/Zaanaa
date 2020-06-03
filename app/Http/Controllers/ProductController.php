<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function all(){
			return view('productArchive');
		}

    public function single($id){
      $p = Product::where('id',$id)->first();
			return view('productSingle',['p'=>$p]);
		}

		public function compare(){
			return view('productCompare');
		}
}
