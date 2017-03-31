<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
   public function comments()
   {
   		return $this->hasMany('App\Comment');  //Comment::class php 5.5->
   }

   public function user()
   {
    	return $this->belongsTo('App\User');  //Post::class
   }

   public function addComment($body)
   {
   		$user_id = auth()->id();
   		$this->comments()->create(compact('body', 'user_id'));

   }

   public function scopeFilter($query, $filters)
   {
   		if($month = $filters['month']){
    		$query->whereMonth('created_at', $month);
    	}

       	if($year = $filters['year']){
    		$query->whereYear('created_at', $year);
    	}
		
		//$posts = $posts->get();
   }

   public static function archives()
   {
   		return static::selectRaw('extract(year from created_at) as year, extract(month from created_at) as month, count(*) published')
    		->groupBy('year', 'month')
    		->orderByRaw('min(created_at) desc')
    		->get()
    		->toArray();
   }

}
