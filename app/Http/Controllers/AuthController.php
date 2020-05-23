<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req){
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/admin');
        }else{
						return redirect('/');
				}
		}

		public function register(Request $req){
				DB::table('users')->insert(
				    ['name' => $req->name,
						 'role_id' => 2,
						 'email' => $req->email,
						 'password' => Hash::make($req->password),
						 'created_at' => date('Y-m-d H:i:s'),
						 'updated_at' => date('Y-m-d H:i:s'),
					 ]
				);

        return redirect('/');
		}
}
