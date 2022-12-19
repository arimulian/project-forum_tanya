<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $table = 'forums';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function answer()
    // {
    //     return $this->morphMany(User::class, 'answer');
    // }
    public function answer()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
}
