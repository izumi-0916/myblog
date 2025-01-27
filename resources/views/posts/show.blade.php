@extends('layouts.default')

@section('title')
{{$post->title}}
@endsection

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header_menu">戻る</a>
  {{ $post->title }}
</h1>
<p>{!! nl2br(e($post->body)) !!}</p>

<h2>コメント</h2>
<ul>
  @forelse ($post->comments as $comment)
  <li>
    {{ $comment->body }}
    <a href="#" class="del" data-id="{{ $comment->id }}">[×]</a>
    <form method="post" action="{{ action('CommentsController@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>コメントはありません</li>
  @endforelse
</ul>
<form method="post" action="{{ action('CommentsController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="コメントを入力してください" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="コメントを投稿">
  </p>
</form>
<script src="/js/main.js"></script>
@endsection