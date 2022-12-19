<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfilController extends Controller
{
    public function profile(){
        $profile = DB::table('profil')->get();
        return view('profile.profile',compact('profile'));
    }
    public function create(){
        return view('profile.tambah');
    }
    public function store(Request $request){
        //  dd($request->all());

        $request->validate([
            'name' => ['max:30'],
            'image' => 'image|mimes:jpeg,png,jpg',
            'alamat' => 'max:40|email',
            'bio' => ['max:1000'],
            'skill' => ['max:50']
,
        ]);

        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();

        $tujuanFile = 'asset/profile';

        $file->move($tujuanFile,$namafile);

        $newProfile = new Profile;
        $newProfile->name = $request->name;
        $newProfile->alamat = $request->alamat;
        $newProfile->bio = $request->bio;
        $newProfile->skill = $request->skill;
        $newProfile->image = $namafile;
        $newProfile->save();
        return redirect('/profile'); 
    }
}
