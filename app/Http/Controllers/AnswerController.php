<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Forum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request, Forum $forum)
    {
        $userID = Auth::id();
        $forum = $forum;
        Answer::create([
            'answer_text' => $request['answer_text'],
            'user_id' => $userID,
            'question_id' => $forum->id
        ]);

        return redirect('/forum' . $forum->id);
    }
}
