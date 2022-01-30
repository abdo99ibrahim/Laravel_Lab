<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'user_id'
    ];

    # model relation --> join post model with user model
    # posts belongs to user
    public function user(){
        return $this->belongsTo(User::class);
    }
}

