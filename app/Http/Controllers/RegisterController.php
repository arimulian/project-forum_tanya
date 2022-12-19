<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{   
    public function register(){
        return view('login.register');
    }
    public function store(Request $request){

            // dd($request->all());

        $validateData = $request->validate([
        'username' => 'required|max:35',
        'email' =>['required','email','unique:users'],
        'password' => 'required|min:5|max:10'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        Register::create($validateData);
        return redirect('/')->with('success',"Register Berhasil! Silahkan Login Kembali");


    }
}
