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
      <a href="#" class="del" data-id="{{ $post->id }}">[×]</a>
      <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
      </form>
    </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection

