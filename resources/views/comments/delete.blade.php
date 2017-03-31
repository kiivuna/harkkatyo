@if(Auth::check() && ((Auth::user()->id == $comment->user_id) || Auth::user()->isAdmin()))
	<form id="delete" method="POST" action="/~as91171/harkkatyo/comments/{{ $comment->id }}/delete">
		{{ csrf_field() }}
		<div class="form-group">  

			<input type="submit" name="delete" value="Delete!">    

			 </div>
	</form>
@endif

