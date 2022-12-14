@extends('global.master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-md-6 p-0">


                    <a class="float-sm-right nav-link btn-sm btn-light text-center d-flex align-items-center" href="{{route('user-site')}}"
                       role="button" title="Back to User Site">
                        <div class="image inline-flex" style="display: inline-flex !important;">
                            <span class="bg-black" style="padding: 4px 8px;font-size: smaller;border-radius: 64px;">
                                {{ (strlen(auth()->user()->name) > 2) ? (substr((strtoupper(auth()->user()->name)),0,2)) : (strtoupper(auth()->user()->name))}}
                            </span>
                        </div>
                        <span class="ml-1">User Site</span>
                    </a>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$all_appointment}}</h3>

                            <p>All Appointment</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('appointment.all')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$completed_appointment}}</h3>

                            <p>Completed Appointment</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('appointment.completed')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$accepted_appointment}}</h3>

                            <p>Accepted Appointment</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('appointment.accept')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$rejected_appointment}}</h3>

                            <p>Rejected Appointment</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('appointment.reject')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>


@stop