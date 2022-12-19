<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profile(){
        return view('profile.profile');
    }
    public function add(){
        return view('profile.tambah');
    }
    public function store(Request $request){

    }
}
