<!DOCTYPE html>
<html lang="en">
<head>
  <title>update Post </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('posts/include.nav')

<div class="container">
  <h2>Update Post data</h2>
  <form action="{{ route('updatePost', [$post->id]) }}" method = "POST" >
    @csrf
    @method('put')

    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
    <label for="content">Content:</label>
        <textarea id="content" name="content" class="form-control">{{$post->content}}</textarea>
        @error('content')
        {{$message}}
        @enderror
    </div>

    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>