<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Index</title>
</head>

<body>
    <div class="container my-5">
        <h1>Our Phone</h1>
    </div>
    <div class="container">
        <form>
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="number" name="phone" placeholder="Name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea id="description" name="description" rows="5" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-dark w-25">Add Phone</button>
            </div>
        </form>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.5.1/tinymce.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        tinymce.init({
            selector: '#description'
        });

        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>
</body>

</html>
