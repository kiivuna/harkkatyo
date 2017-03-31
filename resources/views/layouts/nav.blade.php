<!-- view-source:https://v4-alpha.getbootstrap.com/examples/album/ -->

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href='/~as91171/harkkatyo/posts'>All Posts</a>

          @if(!Auth::check())
          <il class="ml-auto">
            <a class="nav-link" href='/~as91171/harkkatyo/register'>Register</a>
            <a class="nav-link" href='/~as91171/harkkatyo/login'>Log in</a>
          </il>
          @endif

          @if(Auth::check())
            <a class="nav-link" href='/~as91171/harkkatyo/posts/create'>Create a Post</a>    
            <il class="ml-auto">
              <a class="sidebar-module sidebar-module-inset">{{ Auth::user()->name }} </a>
              <a class="nav-link" href='/~as91171/harkkatyo/logout'>Log out</a>             
            </il>
          @endif

        </nav>
      </div>
    </div>
