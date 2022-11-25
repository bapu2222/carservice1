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
                {{--                {{dd($appointment)}}--}}
                <div class="col-sm-6">
                    <h1 class="m-0">View Appointment : {{$appointment->user->name}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="invoice p-3 mb-3">

                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Marammat Car Service, Inc.
                                    <small class="float-right">Appointment
                                        Date: {{$appointment->appointment_date}}</small>
                                </h4>
                            </div>

                        </div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <address>
                                    <strong>{{'#'.$appointment->user->id.'MCS', $appointment->user->name}}</strong><br>
                                    Create Type :{{$appointment->user->is_admin == 1 ? 'Super Admin' : 'User'}}<br>
                                    Type : {{
                                            ($appointment->accept == 1) ? 'Accept' :(($appointment->reject  == 1) ? 'Reject' : (($appointment->completed == 1) ? 'Completed' : 'All') )}}
                                    <br>
                                    Phone: (804) 123-5432<br>
                                    Email: {{$appointment->user->email}}<br>
                                    Time Slot: {{$appointment->appointment_time}}
                                </address>
                            </div>

                        </div>
                        {{--                        {{dd(json_decode($appointment->service_name),json_decode($appointment->service_price))}}--}}
                        @if($appointment->service_name && $appointment->service_price !== null)
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Serial #</th>
                                            <th>Service</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=0; $i < count(json_decode($appointment->service_name)); $i++)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>#{{rand(10000,20000)}}MCS{{$i+1}}</td>
                                                <td>{{json_decode($appointment->service_name)[$i]}}</td>
                                                <td>&#8377; {{json_decode($appointment->service_price)[$i]}}</td>
                                            </tr>
                                        @endfor
                                        <tr>
                                            <td colspan="3" align="center"><strong>Total</strong></td>
                                            <td>&#8377; {{$total}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-6">
                            &nbsp;
                        </div>
                        <div class="col-6">
                            <p class="lead">Appointment Date {{$appointment->appointment_date}}</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">Brands Name:</th>
                                        <td>{{$appointment->brands->name}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Model Number:</th>
                                        <td>{{'MRC'. $appointment->models->id .'00'}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Model Name:</th>
                                        <td>{{$appointment->models->name}}</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                    <table id="appointment_table" class="table table-bordered table-hover">--}}
                {{--                        <thead>--}}
                {{--                        <tr>--}}
                {{--                            <th>#</th>--}}
                {{--                            <th>User Name</th>--}}
                {{--                            <th>Car Brand / Model</th>--}}
                {{--                            <th>Car Number</th>--}}
                {{--                            <th>Appointment Date / Slot</th>--}}
                {{--                            <th>Status</th>--}}
                {{--                            <th>Action</th>--}}
                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}

                {{--                        </tbody>--}}
                {{--                        <tfoot>--}}
                {{--                        <tr>--}}
                {{--                            <th>#</th>--}}
                {{--                            <th>User Name</th>--}}
                {{--                            <th>Car Brand / Model</th>--}}
                {{--                            <th>Car Number</th>--}}
                {{--                            <th>Appointment Date /Slot</th>--}}
                {{--                            <th>Status</th>--}}
                {{--                            <th>Action</th>--}}
                {{--                        </tr>--}}
                {{--                        </tfoot>--}}
                {{--                    </table>--}}
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
        });
    </script>
@stop