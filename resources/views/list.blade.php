<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div  id="show"></div>
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
                        @foreach ($data as $d)
                            <tr id="tr{{ $d->id }}">
                                <th scope="row">{{ $d->id }}</th>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->price }} ကျပ်</td>
                                <td>
                                    <a href="{{ route('prodown', $d->doc) }}">
                                        <button class="btn btn-primary">Download</button>
                                    </a>
                                    <a href="{{ route('printAsFILE', $d->id) }}">
                                        <button class="btn  btn-warning">Print as file</button>
                                    </a>
                                    <a href="javascript:void(0)" onclick="deletepost({{ $d->id }})">
                                        <button class="btn btn-danger" id="remove">Delete</button>
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
<script type="text/javascript">
    function showmessage(para){

    $("#show").html(
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
  +
   'Role Removed Success !  Book Name : '+para
  +
  '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
 +'</div>'  );


}
</script>
<script type="text/javascript">


    function deletepost(id) {
        if (confirm("Are u sure about that ?")) {

        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });
            $.ajax({
                url: 'delete_one/' + id,
                type: 'DELETE',
                success: function(result) {
                    console.log(result);
                    // $('#'+result['tr']).slideUp('slow');
                    $("#tr" + result['id']).slideUp('slow');

                    console.log(result['message']);
                    showmessage(result['name']);
                }


            });
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
