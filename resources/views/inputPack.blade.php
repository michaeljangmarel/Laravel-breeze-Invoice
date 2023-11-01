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
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6 offset-3">
              <form action="{{route("orderings")}}" method="POST">
                @csrf
                <input type="text"  name="packid"  value="2">
                <input type="text"  name="userid" value="5">
                <div class="">
                    <label for="">NAME</label>
                    <input type="text" name="name"  class="form-control" id="">
               </div>
               <div class="">
                   <label for="">EMAIL</label>
                   <input type="email" name="email"  class="form-control" id="">
              </div>
              <div class="">
               <label for="">PHONE</label>
               <input type="number" name="number"  class="form-control" id="">
          </div>
          <input type="submit" value="ORDER" class="btn btn-info mt-4">
              </form>

            </div>
        </div>
    </div>
 </body>
</html>
