<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLoginPage(){
        return view('login');
    }

    public function submitLogin(Request $request){

    }
}
