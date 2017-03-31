<div class="comments">
	<ul class="list-group">
		@foreach ($post->comments as $comment)
			<li class="list-group-item">

				<strong>
					{{ $comment->created_at->diffForHumans() }}
					</br> 
					{{ $comment->user->name }} : &nbsp; 
				</strong> 
				</br>
				{{ $comment->body }}
				<hr>
				@include('comments.delete')
			</li>
		@endforeach
	</ul>
</div>