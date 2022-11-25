@extends('global.master')
@section('customCss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
@stop

@section('content')
    {{--    @include('admin.appointment.model_view_appointment')--}}
    <input type="hidden" value="{{@csrf_token()}}" name="_token">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Appointment</h1>
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
                        @foreach($appointments as $key => $appointment)
                            {{--                            {{dd($appointment)}}--}}
                            <tr>
                                <td>
                                    #{{$key}}
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
                                    @if($appointment->accept == 1)
                                        <span class="right badge badge-dark">Accept</span>
                                    @elseif($appointment->reject == 1)
                                        <span class="right badge badge-danger">Reject</span>
                                    @elseif($appointment->completed == 1)
                                        <span class="right badge badge-success">Complete</span>
                                    @else
                                        <span class="right badge badge-info">New</span>
                                    @endif

                                </td>
                                <td>
                                    <a class="btn btn-sm appointment_view"
                                       href="{{ route('appointment.id.view',['id'=>$appointment->id])}}"
                                       data-id="{{$appointment->id}}" title="View Appointment">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm appointment_accept text-success" href="Javascript:void(0)"
                                       data-id="{{$appointment->id}}" title="Accept Appointment">
                                        <i class="fas fa-check"></i>
                                    </a>
                                    <a class="btn btn-sm appointment_Reject text-danger" href="Javascript:void(0)"
                                       data-id="{{$appointment->id}}" title="Reject Appointment">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>

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
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                order: [[0, "asc"]],'bSortable': true,
            }).buttons().container().appendTo('#appointment_table_wrapper .col-md-6:eq(0)');
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
                            setTimeout(function () {
                                window.location.reload(1);
                            }, 3000);
                        } else {
                            swal.close()
                            ajexalert('Error', "their is problem plz try again later ");
                        }
                    }
                });
            })
            $(document).on('click', '.appointment_accept', function () {
                var base_url = window.location.origin;
                $.ajax({
                    type: 'POST',
                    data: {
                        _token: $("[name='_token']").val(),
                        id: $(this).attr('data-id'),
                        status: 'accept'
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
                            setTimeout(function () {
                                window.location.reload(1);
                            }, 3000);
                        } else {
                            swal.close();
                            ajexalert('Error', "their is problem plz try again later ");
                        }
                    }
                });
            });
        });
    </script>
@stop