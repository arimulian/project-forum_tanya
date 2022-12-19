<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request, $id)
    {
        $userID = Auth::id();
        Answer::create([
            'answer_text' => $request['answer_text'],
            'user_id' => $userID,
            'question_id' => $id
        ]);

        return redirect('/forum/' . $id);
    }
}
