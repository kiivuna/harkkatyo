<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function __construct()
	{

		$this->middleware('auth')->except(['show']);
	}


	 public function show(Comment $comment)  //Task::find(wildcard);
    {
    	//return $task;
    	//dd($id);
	   //$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);
	   //dd($tasks);
    	//$post = Post::find($id);
	    return view('comments.show', compact('comment'));
    }

    public function create()  //Task::find(wildcard);
    {
    	//return $task;
    	//dd($id);
	   //$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);
	   //dd($tasks);
	    return view('comments.create');
    }


    public function store(Post $post)
    {

    	$this->validate(request(), ['body' => 'required|min:2']);
    	//auth()->user()->addComment(new Post(request(['body'])));
    	$post->addComment(request('body'), $post);
    	return back();

    }

    public function destroy($id)
    {
    	$comment = Comment::findOrFail($id)->delete();

    	return back();

    }
}
