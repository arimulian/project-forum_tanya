<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = [
        'id',
        'name',
        'alamat',
        'bio',
        'skill',

    ];

}
