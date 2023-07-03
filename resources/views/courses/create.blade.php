<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>Create Course</title>
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Create New Course</h1>
            <a href="{{route('courses.index')}}" class="btn btn-primary px-5">Return Back</a>
            {{-- <a onclick="history.back()" class="btn btn-primary px-5">Return Back</a> --}}
        </div>

        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" placeholder="Price" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" placeholder="Image" class="form-control">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea id="descrption" name="descrption" rows="5" class="form-control"></textarea>
            </div>

            <button class="btn btn-success btn-lg px-5">Add</button>
        </form>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.5.1/tinymce.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        tinymce.init({
            selector: '#descrption'
        });

        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>
</body>

</html>
