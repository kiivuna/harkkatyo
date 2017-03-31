<div class="blog-post">
  <h2 class="blog-post-title">
    <a href="/~as91171/harkkatyo/posts/{{ $post->id }}">
      {{ $post->title }} 
    </a>
  </h2>
  <p class="blog-post-meta">
    <b>{{ $post->user->name }} </b>
    on 
    {{ $post->created_at->toFormattedDateString() }} 
    </br>
    <i> (updated 
    at 
    {{ $post->updated_at->toFormattedDateString() }} 
    ) </i>
  </p>

  {{ $post->body }} 



</div><!-- /.blog-post -->
