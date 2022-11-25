@extends('global.master')
@section('customCss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
@stop

@section('content')
    @include('admin.appointment.partials.appointment_note_send')
    @if (\Session::has('success'))
        <div class="alert callout callout-success alert-dismissible mt-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>{!! \Session::get('success') !!}</h5>

        </div>
    @endif

    <input type="hidden" value="{{@csrf_token()}}" name="_token">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Accept Appointment</h1>
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
                                    <span class="right badge badge-success">Accept</span>
                                </td>
                                <td>
                                    <a class="btn btn-sm"
                                       href="{{ route('appointment.id.view',['id'=>$appointment->id])}}"
                                       title="View Appointment">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm accept-appointment-model" href="Javascript:void(0)"
                                       data-id="{{$appointment->id}}" title="Add item to user send">
                                        <i class="fas fa-sticky-note"></i>
                                    </a>
                                    <a class="btn btn-sm appointment_completed" href="Javascript:void(0)"
                                       data-id="{{$appointment->id}}" title="Completed Appointment">
                                        <i class="fas fa-check-circle"></i>
                                    </a>
                                    <a class="btn btn-sm appointment_Reject" href="Javascript:void(0)"
                                       data-id="{{$appointment->id}}" title="Reject Appointment">
                                        <i class="fas fa-times"></i>
                                    </a>

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
            var base_url = window.location.origin;

            var body = $('body');
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
            $(document).on('click', '.accept-appointment-model', function () {
                let id = $(this).attr('data-id');
                $('#selected_id').val(id);
                $('#exampleModal').modal('show');

            })
            body.on('click', '.add-item', function (e) {
                e.preventDefault();
                var clone = $('.master-data').clone();
                clone.removeClass('master-data d-none');
                clone.addClass('clone-data');
                clone.find('input').each(function () {
                    var $_this = $(this);
                    var name = $_this.attr('name');
                    var id = $_this.attr('price');
                });
                clone.appendTo('.insert-data');
                console.log(clone)
                // alert("helo");
            })
            body.on('click', '.remove-item', function (e) {
                var $this = $(this);
                e.preventDefault();
                $this.closest('.clone-data').remove();

            })
            body.on('click', '.save-note', function (e) {
                var $this = $(this);
                e.preventDefault();
                var form = $("#appointment-accept-note");
                swal({
                    title: "Send Mail...",
                    text: "Loading...",
                    showConfirmButton: false,
                    allowOutsideClick: false
                });
                form.submit();
                // $.ajax({
                //     type: "POST",
                //     data: $('input').serialize(),
                //     url: base_url + '/appointment-note',
                //     beforeSend: function () {
                //         swal({
                //             title: "Sending Mail",
                //             text: "loading...",
                //             showConfirmButton: false,
                //             allowOutsideClick: false
                //         });
                //     },
                //     success: function (data) {
                //         // if (data.success == true) {
                //         //     swal("Nice!", set_success_message + name, "success");
                //         //     html = '<option value="' + data.set_detail.id + '" selected="selected">' + data.set_detail.name + '</option>';
                //         //     $('#user_set_id').append(html);
                //         //     reloadNewSet();
                //         // } else {
                //             swal.close();
                //             alert("success")
                //         //     showAjaxAlert('alert-danger', data.message);
                //         // }
                //
                //     }, error: function (jq_xhr, json, errorThrown) {
                //         alert("error")
                //         swal.close();
                //         // errors_html = displayFormRequestErrors(jq_xhr);
                //         // showAjaxAlert('alert-danger', errors_html);
                //     }
                // });

            })
        });
    </script>
@stop