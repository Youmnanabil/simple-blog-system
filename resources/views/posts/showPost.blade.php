<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Show Post</title>

</head>
@include('posts/include/nav')

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Show Post</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="form-group"></div>
            <strong>Title:</strong>
            {{ $post->title  }}
        </div>
    </div>
    <div class="col-xs-12 mb-3">
        <div class="form-group"></div>
            <strong>Content:</strong>
            {{ $post->content }}
        </div>
    </div>
    <div class="float-end">
        <a class="btn btn-primary" href="{{ route('postTable') }}"> Back</a>
    </div>

</body>

</html>