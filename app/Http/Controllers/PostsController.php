<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
	public function __construct()
	{

		$this->middleware('auth')->except(['index', 'show']);
	}


    public function index()
    {
    	$posts = Post::latest() //Post::orderBy('created_at', 'desc');  //latest()->get()
    		->filter(request(['month', 'year']))
    		->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)  //Task::find(wildcard);
    {
    	//return $task;
    	//dd($id);
	   //$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);
	   //dd($tasks);
    	//$post = Post::find($id);
	    return view('posts.show', compact('post'));
    }

    public function create()  //Task::find(wildcard);
    {
    	//return $task;
    	//dd($id);
	   //$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);
	   //dd($tasks);
	    return view('posts.create');
    }

    public function store()
    {
    	//dd(request('title'));
    	//Create a new post using the request data
    	//$post = new Post;

    	//$post->title = request('title');
    	//$post->body = request('body');

    	//Save it to the database
    	//$post->save();
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	auth()->user()->publish(
    		new Post(request(['title', 'body']))
    	);

    	//massassignmentexception

    	//And then redirect to the home page.
    	return redirect('/');
    }

    public function destroy($id)
    {
    	$post = Post::findOrFail($id)->delete();

    	return redirect('/');

    }

    public function edit($id)
    {
    	$post = Post::find($id);

    	return view('posts.edit', compact('post'));

    }

    public function update($id)
    {
    	
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	$post = Post::findOrFail($id);
    	$post->title = request('title');
    	$post->body = request('body');
    	$user = User::findOrFail($post->user_id);
    	$user->publish($post);

    	return redirect('/');

    }
}

