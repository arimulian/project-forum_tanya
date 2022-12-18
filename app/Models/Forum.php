<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Forum extends Model
{
    use HasFactory;
    protected $table = 'forums';
    protected $fillable = ['question', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
