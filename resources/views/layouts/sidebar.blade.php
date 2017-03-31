<div class="col-sm-3 offset-sm-1 blog-sidebar">

  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach($archives as $stats)
        <li>
          <a href="/~as91171/harkkatyo/?month={{ $stats['month'] }} &year={{ $stats['year'] }}"> 
            {{ date('F', mktime(0, 0, 0, $stats['month'], 10)) . ' ' . $stats['year'] }}
          </a>
        </li>
      @endforeach
    </ol>
  </div>

</div><!-- /.blog-sidebar -->
