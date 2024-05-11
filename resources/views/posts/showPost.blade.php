<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Show Post</title>

</head>
@include('posts/include/nav')

<body>
    <h1> {{ $post->title }}</h1>
    <h5>{{ $post->created_at }}</h5>
    <h5>{{ $post->updated_at }}</h5>
    <h3>{{ $post->content }}</h3>
</body>

</html>