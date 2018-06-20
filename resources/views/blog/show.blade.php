@extends('blog.layouts.body')

@section('content')

  <h1> {{$post->title}} </h1>

  {{$post->body}}

  <div class = "comments">
    <ul>
      @foreach($post->comments as $comment)
        {{$comment->created_at->diffForHumans()}}
        {{$comment->body}}
        <br>
      @endforeach
    </ul>
  </div>

  {{-- Add Comment --}}
  <dev class="card">
    <div class="card_block">
      <form method="POST" action="/posts/{{$post->id}}/comments">
        {{ csrf_field() }}
        <div class="form_group">
          <textarea name="body" placeholder="Your Comment"></textarea>       
        </div>
        <div class="form_group">
          <input value="Input button" type="submit">     
        </div>
      </form>
    </div>
  </dev>
@endsection