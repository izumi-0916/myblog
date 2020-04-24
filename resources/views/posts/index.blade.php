@extends('layouts.default')

@section('title')
Blog Posts
@endsection

@section('content')
<h1>
<a href="{{ url('/posts/create') }}" class="header_menu">新規作成</a>
ブログ投稿
</h1>
<ul>
  @forelse ($posts as $post)
    <li>
      <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
      <a href="{{ action('PostsController@edit', $post) }}" class="edit">[編集]</a>
    </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
@endsection

