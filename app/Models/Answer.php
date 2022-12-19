<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = 'answer';
    protected $fillable = ['answer_text', 'user_id', 'question_id'];

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'question_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
