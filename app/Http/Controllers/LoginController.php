<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function auth(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $input = $request->all();
        if(auth()->attempt(array('email'=> $input['email'],'password'=>$input['password']))){
            return redirect('/forum');
        }

        return back()->with('loginError', 'Login Filed!')->onlyInput('email');

    }
}
