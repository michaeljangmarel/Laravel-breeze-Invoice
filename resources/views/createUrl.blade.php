<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{ route("org") }}" method="POST">
                    @csrf
                    <div class="">
                        <div class="">
                            <label for="">Name</label>
                            <input type="text" name="name"  class="form-control" id="">
                        </div>
                        <div class="">
                            <label for="">URL</label>
                            <input type="url" name="url"  class="form-control" id="">
                        </div>
                        <input type="submit"  class="btn btn-outline-info"  value="OK">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
