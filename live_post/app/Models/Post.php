<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Comment;
class Post extends Model
{
    use HasFactory;

//    protected $hidden = [
//        'title'
//    ];

    protected $fillable = [
        'title',
        'body',
    ];

//    protected $guarded = [
//        'title'
//    ];

    protected $casts = [
        'body' => 'array'
    ];

//    protected $appends = [
//        'title_upper_case'
//    ];

public function comments()
{
    return $this->hasMany(Comment::class, 'post_id');
}


public function users()
{
    return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
}

}
