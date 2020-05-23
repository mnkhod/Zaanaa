<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function all(){
		return view('blogArchive');
	}

	public function single($id){
		return view('blogSingle');
	}
}
