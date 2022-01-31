<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
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

