@extends('layouts.default')

@section('title')
New Post
@endsection

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header_menu">戻る</a>
  新規作成
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="タイトルを入力してください" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="中身を入力してください">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="投稿">
  </p>
</form>
@endsection