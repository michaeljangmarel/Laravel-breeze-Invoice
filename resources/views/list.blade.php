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
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">ဒေါင်းလုပ်ဆွဲရန်</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d )
                    <tr>
                        <th scope="row">{{ $d->id }}</th>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->price }} ကျပ်</td>
                        <td>
                            <a href="{{ route('prodown',$d->doc) }}">
                                <button class="btn btn-primary">Download</button>
                            </a>
                            <a href="{{ route('printAsFILE',$d->id) }}">
                                <button class="btn  btn-warning">Print as file</button>
                            </a>
                        </td>
                      </tr>
                    @endforeach
                    <a href="{{ route('book_page') }}">
                        <button class="btn btn-info">
                            ဖန်တီးရန်နေရာသို့
                        </button>
                    </a>
                </tbody>
              </table>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
