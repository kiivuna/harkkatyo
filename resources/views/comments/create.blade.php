<div class="card">
	<div class="card-block">
		<form method="POST" action="/~as91171/harkkatyo/posts/{{ $post->id }}/comments">

		  {{ csrf_field() }}

		  <div class="form-group">
		    <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Add Comment</button>
		  </div>


		  @include('layouts.errors')

		</form>
	</div>

</div>
