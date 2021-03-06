<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function incrLike()
    {
        return $this->likes_count++;
    }
}
