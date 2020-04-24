@extends('layouts.default')

@section('title')
$post->title
@endsection

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header_menu">戻る</a>
  {{ $post->title }}
</h1>
<p>{!! nl2br(e($post->body)) !!}</p>
@endsection