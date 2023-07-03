<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"/>

    <title>Form2</title>
  </head>
  <body>
    <div class="container my-5">
        <h1>Form two</h1>

        <form action="{{route('form2')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="mb-3">
                <label>Birthday</label>
                <input type="text" class="form-control datepicker" value="02-16-2012" name="dob">
            </div>


            <button class="btn btn-dark w-25" >Send</button>
        </form>

    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
  </body>
</html>
