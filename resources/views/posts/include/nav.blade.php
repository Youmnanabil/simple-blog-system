<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">POSTS Page</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route ('postTable')}}">Post Table</a></li>
      <li><a href=" {{ route ('addPost')}}">Insert Post</a></li>
      <li><a href="{{ route ('TrashedPosts')}} ">Trashed Posts</a></li>
      <li><a href="{{ route('users.index')}} ">Users list</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>

</body>
</html>
