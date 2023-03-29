<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Video Management') }}</title>
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @elseif(session('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session('failed') }}
        </div>
        @endif

        <div class="container">
            <h1>Video Management</h1>
            <a href="/create" class="btn btn-success" role="button">Tambah Video</a>
            <table id="myTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Nama File</th>
                        <th>Link Video</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                pagingType: 'full_numbers',
                searching: false,
                lengthChange: false,
                data: {!! json_encode($videos) !!},
                columns: [
                    { data: 'file_name' },
                    { data: 'file_url' },
                    {
                        "mRender": function ( data, type, row ) {
                            return '<a href="/play/'+ row.id +'" class="btn btn-info" role="button">Play</a>&nbsp;&nbsp;<a href="/edit/'+ row.id +'" class="btn btn-primary">Edit</a>&nbsp;&nbsp;<a href="/destroy/'+ row.id +'"  class="btn btn-danger">Delete</a>';
                        }
                    }
                ]
            });
        });
    </script>
</html>