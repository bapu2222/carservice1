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
                    <h1 class="m-0">service Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="{{route('services.create')}}">
                        <button class="btn btn-sm btn-outline-primary">Add services</button>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="servide_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Category</th>
                            <th>Service Category Type</th>
                            <th>Price</th>
                            <th>Service Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>
                                    #{{$service->id}}
                                </td>
                                <td>
                                    {{$service->name}}
                                </td>
                                <td>
                                    {{$service->description}}
                                </td>
                                <td>
                                    {{$service->cate_name->name}}
                                </td>
                                <td>
                                @foreach ($service_Types as $key => $service_Type)
                                    @if(isset($service->type) && $service->type == $key)
                                        {{$service_Type}}
                                    @endif
                                @endforeach
                                <td>
                                    {{$service->price}}
                                </td>
                                <td>
                                    @if($service->services_image == null )
                                        {{'IMAGE NOT ADDED '}}
                                    @else
                                        <a data-fancybox="gallery"
                                           href="{{'/img/servicesPhoto/'.$service->services_image}}">
                                            <img class="rounded"
                                                 src="{{'/img/servicesPhoto/'.$service->services_image}}"
                                                 width="50px" alt="Services images">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('services.edit',['service'=>$service->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i> Edit
                                    </a>
                                    <a class="btn" style="padding: 0; margin: 0">
                                        <form method="POST"
                                              action="{{route('services.destroy',['service'=>$service->id])}}">
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
                            <th>ID</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Category</th>
                            <th>Service Category Type</th>
                            <th>Price</th>
                            <th>Service Image</th>
                            <th>Actions</th>
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
            $("#servide_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#servide_table_wrapper .col-md-6:eq(0)');
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