<?php 
// app/Models/Tag.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
