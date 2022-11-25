@extends('global.master')
@section('customCss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
@stop

@section('content')
    <input type="hidden" value="{{@csrf_token()}}" name="_token">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Completed Appointment</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="appointment_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Car Brand / Model</th>
                            <th>Car Number</th>
                            <th>Appointment Date / Slot</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            {{--                            {{dd($appointment)}}--}}
                            <tr>
                                <td>
                                    #{{$appointment->id}}
                                </td>
                                <td>
                                    {{$appointment->user->name}}
                                </td>
                                <td>
                                    <strong>{{$appointment->brands->name}} </strong> {{$appointment->models->name}}
                                </td>
                                <td>
                                    {{$appointment->car_number}}
                                </td>
                                <td>
                                    {{$appointment->appointment_date }} / {{$appointment->appointment_time}}
                                </td>
                                <td>
                                        <span class="right badge badge-info">Completed</span>
                                </td>
                                <td>
                                    <a class="btn btn-sm" href="{{ route('appointment.id.view',['id'=>$appointment->id])}}"
                                       title="View Appointment"><i
                                                class="fas fa-eye"></i> </a>
                                </td>
                                {{--                                <td>--}}
                                {{--                                    <a class="btn btn-info btn-sm"--}}
                                {{--                                       href="{{route('categories.edit',['category'=>$categorie->id])}}">--}}
                                {{--                                        <i class="fas fa-pencil-alt">--}}
                                {{--                                        </i> Edit--}}
                                {{--                                    </a>--}}
                                {{--                                    <a class="btn" style="padding: 0; margin: 0">--}}
                                {{--                                        <form method="POST"--}}
                                {{--                                              action="{{route('categories.destroy',['category'=>$categorie->id])}}">--}}
                                {{--                                            @csrf--}}
                                {{--                                            <input type="hidden" name="_method" value="DELETE">--}}
                                {{--                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash">--}}
                                {{--                                                </i> Delete--}}
                                {{--                                            </button>--}}
                                {{--                                        </form>--}}
                                {{--                                    </a>--}}
                                {{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Car Brand / Model</th>
                            <th>Car Number</th>
                            <th>Appointment Date /Slot</th>
                            <th>Status</th>
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
    <script src="{{asset('js/custom.js')}}"></script>
    <script>
        $(function () {
            // appointment_Reject
            $("#appointment_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#appointment_table_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
            $(document).on('click', '.appointment_Reject', function () {
                var base_url = window.location.origin;
                $.ajax({
                    type: 'POST',
                    data: {
                        _token: $("[name='_token']").val(),
                        id: $(this).attr('data-id'),
                        status: 'reject'
                    },
                    url: base_url + "/change-appointment-status",
                    beforeSend: function () {
                        swal({
                            title: "Sending Mail...",
                            text: "Loading...",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function (data) {
                        if (data.status == 'success') {
                            swal.close()

                            ajexalert('success', data.message);
                            setTimeout(function(){
                                window.location.reload(1);
                            }, 3000);
                        } else {
                            ajexalert('Error', "their is problem plz try again later ");
                        }
                    }
                });
            })
            $(document).on('click', '.appointment_completed', function () {
                var base_url = window.location.origin;
                $.ajax({
                    type: 'POST',
                    data: {
                        _token: $("[name='_token']").val(),
                        id: $(this).attr('data-id'),
                        status: 'completed'
                    },
                    url: base_url + "/change-appointment-status",
                    beforeSend: function () {
                        swal({
                            title: "Sending Mail...",
                            text: "Loading...",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function (data) {
                        if (data.status == 'success') {
                            swal.close()

                            ajexalert('success', data.message);
                            setTimeout(function(){
                                window.location.reload(1);
                            }, 3000);
                        } else {
                            ajexalert('Error', "their is problem plz try again later ");
                        }
                    }
                });
            })
        });
    </script>
@stop