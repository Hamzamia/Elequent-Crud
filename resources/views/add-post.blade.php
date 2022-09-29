<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center mt-5">Add Post </h2>
  
      <div class="col-md-6 offset-md-3">

        @if (Session::has('post_created'))
        <div class="alert alert-success">
            {{Session::get('post_created')}}
        </div>
        @endif


        <form method ="POST" action="{{route('post.save')}}">
            @csrf
            <div class="form-group mt-3">
                <label for="title" >Post Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="enter post title here">
            </div>

            <div class="form-group mt-3">
                <label for="title" >Post description</label>
                <textarea type="text" name="description" class="form-control" id="title" placeholder="enter post Description here"></textarea>
            </div>
            <button class="btn btn-success mt-3">Save post</button>
        </form>
      </div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>