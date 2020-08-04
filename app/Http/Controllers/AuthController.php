<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
    	return view('register');
    }
    public function proses(Request $request){
        $firstname = $request["firstname"];
     	$lastname = $request["lastname"];
     	$nama_lengkap="$firstname $lastname";
        return view('welcome', compact("nama_lengkap"));
	}

    public function welcome(Request $request)
    {
    	return view('welcome');
    }
}
