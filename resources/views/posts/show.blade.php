@extends('layouts.master')


@section('content')

	<div class="col-sm-8 blog-main">

		<h1> {{ $post->title }} </h1>
		@include('posts.delete')
		
	    <b>{{ $post->user->name }} </b>
	    on 
	    {{ $post->created_at->toFormattedDateString() }} 
	    </br>
	    <i> (updated 
	    at 
	    {{ $post->updated_at->toFormattedDateString() }} 
	    ) </i> 
		
		<hr>
		{{ $post->body }}

		<hr>

		@include('comments.show')

		@if(Auth::check())
			@include('comments.create')
		@endif

	</div>

@endsection