<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
        <h1>First form Example</h1>

        <form action="{{route('form1')}}" method="post" >
            @csrf
            <input type="text" class="form-control" placeholder="Name" name="name">
            <input type="text" class="form-control" placeholder="Email" name="email">
            <input type="text" class="form-control" placeholder="Email1" name="email1">
            <input type="text" class="form-control" placeholder="Email2" name="email2">
            <input type="text" class="form-control" placeholder="Email3" name="email3">
            <button class="btn btn-success w-25 mt-4">Send</button>
        </form>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
