@if(Auth::check() && ((Auth::user()->id == $post->user_id) || Auth::user()->isAdmin()))
	<form id="delete" method="POST" action="/~as91171/harkkatyo/posts/{{ $post->id }}/delete">
		{{ csrf_field() }}
		<div class="form-group">  

			<input type="submit" name="delete" value="Delete!">  
			<a class="" href='/~as91171/harkkatyo/posts/{{ $post->id }}/edit'>Edit</a>  

		</div>
	</form>

@endif

