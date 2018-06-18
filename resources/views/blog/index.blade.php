@extends('blog.layouts.body')

@section('content')
  <h1> All blogs</h1>

  <div class="container">
    @foreach($posts as $post)
      @include('blog.post')
    @endforeach
  </div>
@endsection