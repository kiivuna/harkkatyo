@extends('layouts.master')
	@section('content')
		<div class="col-sm-8 blog-main">
			
			@if(Auth::check() && ((Auth::user()->id == $post->user_id) || Auth::user()->isAdmin()))
				<h1>Edit {{ $post->title }}</h1>

				<hr>

				<form method="POST" action="/~as91171/harkkatyo/posts/{{ $post->id }}/edit">

				  {{ csrf_field() }}

				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" class="form-control" id="title" name="title" value= {{ $post->title }} required>
				  </div>

				  <div class="form-group">
				    <label for="body">Body</label>
				    <textarea id="body" name="body" class="form-control" required>{{ $post->body }}</textarea>
				  </div>

				  <div class="form-group">
				  	<button type="submit" class="btn btn-primary">Publish</button>
				  </div>

				  @include('layouts.errors')

				</form>
			@endif

		</div>
	@endsection
