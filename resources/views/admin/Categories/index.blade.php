@extends('global.master')
@section('customCss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
@stop

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="{{route('categories.create')}}">
                        <button class="btn btn-sm btn-outline-primary">Add Category</button>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="category_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $categorie)
                            <tr>
                                <td>
                                    #{{$categorie->id}}
                                </td>
                                <td>
                                    {{$categorie->name}}
                                </td>
                                <td>@if($categorie->categories_image == null )
                                        {{'NOT ADDED IMG '}}
                                    @else
                                        <a data-fancybox="gallery" href="{{'/img/categoriesPhoto/'.$categorie->categories_image}}">
                                            <img class="rounded" src="{{'/img/categoriesPhoto/'.$categorie->categories_image}}"  width="50px" alt="categories images">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('categories.edit',['category'=>$categorie->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i> Edit
                                    </a>
                                    <a class="btn" style="padding: 0; margin: 0">
                                        <form method="POST"
                                              action="{{route('categories.destroy',['category'=>$categorie->id])}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">
                                                </i> Delete
                                            </button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop
@section('customScript')
    <!-- DataTables  & Plugins -->
    <script src="{{asset("plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("plugins/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("plugins/pdfmake/pdfmake.min.js")}}"></script>
    <script src="{{asset("plugins/pdfmake/vfs_fonts.js")}}"></script>
    <script src="{{asset("plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>

    <script>
        $(function () {
            $("#category_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#category_table_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>
@stop