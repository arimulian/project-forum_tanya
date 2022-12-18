<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Forum extends Model
{
    use HasFactory;
    protected $table = 'forums';
<<<<<<< HEAD
    protected $fillable = ['question', 'description', 'kategory','image'];
=======
    protected $fillable = ['question', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
>>>>>>> 867f9705fe45eec0e5b07c885e5d4e65709182ea
}
