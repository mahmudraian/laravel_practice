<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('form');
    }


    public function register(Request $request){

        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
           "password"=> "required|confirmed",
          "password_confirmation"=>"required"

        ]);


        print_r($request->all());
    }

}
