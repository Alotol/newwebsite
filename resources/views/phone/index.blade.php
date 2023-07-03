<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <title>Index</title>
</head>

<body>
    <div class="container my-5">
        <h1>Our Phone</h1>
        <a class="btn btn-dark" href="{{route('phone.create')}}">Add New</a>
    </div>
    <div class="container">
        <table class="table table-bordered table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mohammed</td>
                <td>2232</td>
                <td>fsdvf.jpg</td>
                <td>2/9/2023</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>


        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

</body>

</html>
