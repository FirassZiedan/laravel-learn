@extends('blog.layouts.body')

@section('content')
  <form method="POST" action="/posts">
    {{ csrf_field() }}

    <fieldset>
      <legend>Create Blog</legend>
      <br/>
        <label for="textarea">Title</label>
        <input id="input" placeholder="title" type="text" name="title">
      <p></p>
        <label for="textarea">Body</label>
        <textarea id="textarea" rows="5" name="body"></textarea>
      <p></p>
        <input value="Input button" type="submit">
      </fieldset>
  </form>
@endsection