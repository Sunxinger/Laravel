<!DOCTYPE html>
<html>
<head>
    <title>Post Updated</title>
</head>
<body>
    <h1>A post has been updated!</h1>
    <p>The post "{{ $post->title }}" has been recently updated. Check it out!</p>
    <a href="{{ url('/posts/' . $post->slug) }}">View Post</a>
</body>
</html>