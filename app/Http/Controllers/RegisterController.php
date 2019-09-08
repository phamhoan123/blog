<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegisterPage(){
        return view('register')->with('error', null);
    }

    public function submitRegister(Request $request){
        $rawMember = new Member();
        $rawMember->username = $request->username;
        $rawMember->mail = $request->mail;
        $rawMember->password = Hash::make($request->password);
        $rawMember->sex = $request->sex;
        $rawMember->levels_id =  1;

        if($rawMember->validateMember()) {
            $rawMember->save();
            return redirect()->route('login');
        } else {
            return redirect()->back()
                ->with('error', 'This email is existed! Please enter the other or login')
                ->withInput($request->all());
        }
    }
}
