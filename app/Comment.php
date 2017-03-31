<?php

namespace App;

class Comment extends Model
{
    public function post()
    {
    	return $this->belongsTo('App\Post');  //Post::class
    }

    public function user()
    {
    	return $this->belongsTo('App\User');  //Post::class
    }
}
