<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.index')}}" class="brand-link bg-info">
        <img src="{{asset("favicon_io/micon.jpg")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light text-uppercase">Marammat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image inline-flex" style="display: inline-flex !important;">
                <span class="bg-black" style=" padding: 7px 11px; border-radius: 64px;">
                    {{ (strlen(auth()->user()->name) > 2) ? (substr((strtoupper(auth()->user()->name)),0,2)) : (strtoupper(auth()->user()->name))}}
                </span>
                {{--                <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">--}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Request
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: block;">
                        <li class="nav-item">
                            <a href="{{route('appointment.all')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Appointment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('appointment.accept')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Accepted Appointment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('appointment.reject')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rejected Appointment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('appointment.completed')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Appointment</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-candy-cane"></i>
                        <p>
                            Manage Category

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('services.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-satellite"></i>
                        <p>
                            Manage Service

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brand.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-barcode"></i>
                        <p>
                            Brands

                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
