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

<section style="height:2000px"></section>
<section id="form-wrapper">
    <div class="container my-5">


        @if ($errors->any())

        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
        <form action="{{route('form3')}}" method="POST">
@csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control  @error('name') is-invalid @enderror">
                @error('name')
                <small class="invalid-feedback">{{ $message}}</small>
                @enderror
            </div>

            <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <small class="invalid-feedback">{{ $message}}</small>
            @enderror
            </div>
            <button class="btn btn-dark">Send</button>
        </form>

    </div>
</section>

<section style="height:2000px"></section>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        setTimeout(function() {
            $('.alert').fadeOut(1000);
        }, 3000);
        }, 3000);

        @if ($errors->any())
        $('body, html').animate({
        scrollTop: $('#form-wrapper').offset().top
    },1000)
        @endif

    </script>
  </body>
</html>
