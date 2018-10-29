@extends('posts.master')

@section('title')
    All posts
@endsection

@section('content')
    <h1>Posts</h1>
    <ul>
      @foreach($posts as $post)
      <h6>Created by <a href="/users/{{$post->author->id}}">{{$post->author->name}}</a></h6>

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
            <p>{{ $post->body }}</p>
<hr>
          </div><!-- /.blog-post -->

      @endforeach
    </ul>

@endsection
