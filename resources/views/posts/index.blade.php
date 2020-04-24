<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Blog Posts</title>
</head>
<body>
  <div class="container">
  <h1>Blog Posts</h1>
  <link rel="stylesheet" href="/css/style.css">
  <ul>
    {{--
    @foreach ($posts as $post)
    <li><a href="">{{ $post->title }}</a></li>
    @endforeach
    --}}
    @forelse ($posts as $post)
    <li><a href="">{{ $post->title }}</a></li>
    @empty
    <li>No posts yet</li>
    @endforelse
  </ul>
</body>
</html>