<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="col-6 offset-3 p-3 mt-3">
        <form action="{{ route('ui_book_create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <input class="form-control @error('name')
                    is-invalid
                @enderror" type="text" name="name" placeholder="NAME">
                @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mt-3">
                <input class="form-control @error('price')
                    is-invalid
                @enderror" type="number" name="price" id="" placeholder="Price">
                @error('price')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mt-3">
                <input class="form-control @error('doc')
                    is-invalid
                @enderror" type="file" name="doc" id="">
            </div>
            <input type="submit" class="btn btn-info mt-2" value="OK">
            @error('doc')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
          </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
