<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  @include('posts/include/nav')

<div class="container">
  <h2>Post data</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Show</th>
        <th>Eidt</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($post as $row )
      <tr>
        <td>{{ $row->title}}</td>
        <td> {{ $row->content }}</td>
        <td><a href="showPost/{{ $row->id }} ">show</a></td>
       
        @can('post-edit')
        <td>
          <a href=" editPost/{{ $row->id }}">Edit</a>
        </td>
        @endcan
        
        @can('post-delete')
        <td>
          <a href="deletePost/ {{ $row->id }}" onclick="return confirm ('are you sure you want to delete?')">delete</a>
        </td>
        @endcan
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>