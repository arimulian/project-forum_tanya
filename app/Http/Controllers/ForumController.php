<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = DB::table('forums')->latest('id')->paginate(5);
        return view('halaman.forum.index');
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|max:255',
            'kategory' => 'required',
            'description' => 'required'
        ]);
<<<<<<< HEAD
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/question';
        
        $file->move($tujuanFile,$namafile);

=======
>>>>>>> 867f9705fe45eec0e5b07c885e5d4e65709182ea

        $forum = new Forum;
        $forum->question = $request->question;
        $forum->description = $request->description;
<<<<<<< HEAD
        $forum->image = $namafile;
        $forum->kategory = $request->kategory;
=======
        $forum->image = $request->image;
        $forum->category_id = $request->category_id;
        $forum->user_id = $request->user_id  = auth()->user()->id;
>>>>>>> 867f9705fe45eec0e5b07c885e5d4e65709182ea
        $forum->save();
        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        $forum = Forum::find($forum);
        return view('halaman.forum.detail', ['forum' => $forum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
