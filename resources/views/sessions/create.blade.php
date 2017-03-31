@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Sign In</h1>

        <hr>

        <form method="POST" action="/~as91171/harkkatyo/login">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required></input>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required></input>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>


          @include('layouts.errors')

        </form>



    </div>


@endsection
