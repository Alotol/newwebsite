<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

    <style>
        table td,
        table tr {
            vertical-align: middle;
        }
    </style>
    <title>Courses</title>
</head>

<body>

    @if (session('mag'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show">
            {{ session('mag') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1>Our Courses</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-info">Add New</a>
            </div>
            <form class="d-flex align-items-center my-5" action="" method="get" id="filter_form">
                Item per page
                @if (request()->page)
                    <input type="hidden" name="page" value="{{ request()->page }}">
                @endif

                <select name="item_count" class="mx-2" id="item_count">
                    <option {{ request()->item_count == 5 ? 'selected' : '' }}>5</option>
                    <option {{ request()->item_count == 10 ? 'selected' : '' }}>10</option>
                    <option {{ request()->item_count == 15 ? 'selected' : '' }}>15</option>
                    <option {{ request()->item_count == 20 ? 'selected' : '' }}>20</option>
                    <option {{ request()->item_count == 25 ? 'selected' : '' }}>25</option>
                    <option {{ request()->item_count == 50 ? 'selected' : '' }}>50</option>
                </select>

            </form>
        </div>

        <form method="GET" action="" class="my-4">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" value="{{ request()->name }}" name="name" class="form-control"
                                placeholder="Name">
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
        <table id="empTable" class="table table-bordered table-striped display dataTable">
            <tr class="table-info">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>

            @if ($courses->count() > 0)
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->price }}$</td>
                        <td><img src="{{ asset('uploads/image/' . $course->image) }}" width="65" height="65"
                                alt="image"></td>
                        <td>{{ $course->created_at }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('courses.edit', $course->id) }}"><i
                                    class="fas fa-edit"></i></a>
                            {{-- <a class="btn btn-danger btn-sm" href="{{ route('courses.destroy', $course->id) }}"><i
                                    class="fas fa-trash"></i></a> --}}
                            <form class="d-inline" method="POST" action="{{ route('courses.destroy', $course->id) }}">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('هل انت متاكد اخوي')" class="btn btn-danger btn-sm"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td style="text-align: center" colspan="6">No Data found</td>
                </tr>
            @endif
        </table>

        {{-- {{$courses->appends('item_count', request()->item_count)->links()}} --}}
        {{ $courses->appends($_GET)->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    {{-- <script>
$(document).ready(function(){
   $('#empTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'ajaxfile.php'
      },
      'columns': [
         { data: 'name' },
         { data: 'price' },
         { data: 'image' },
         { data: 'descrption' },

      ]
   });
});

        </script> --}}

        <script>
        $('#item_count').change(function() {
            $('#filter_form').submit();
        })
        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>


</body>

</html>
