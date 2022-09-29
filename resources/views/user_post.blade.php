<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elequent query </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h2>Add user Post</h2>
    @if (Session::has('post _created'))

    <div>
        {{Session::get('post _created')}}
    </div>
        
    @endif
<form action="{{route('post.user_post')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="title" for="">Post title</label>
        <input name="title" type="text" placeholder="enter post title">
    </div>

    <div class="form-group">
        <label for="body" for="">Post description</label>
          <textarea name="body" type="text" placeholder="enter post description"></textarea>
      </div>

      <button class="btn btn-success">save post </button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>