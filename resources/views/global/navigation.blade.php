<!-- Preloader -->
{{--<div class="preloader flex-column justify-content-center align-items-center">--}}
{{--    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">--}}
{{--</div>--}}

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard.index')}}" class="nav-link">Home</a>
        </li><li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('auth.logout')}}" class="nav-link">Log out</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">0 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> Welcome To Marammat
                    <span class="float-right text-muted text-sm">5 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-sm btn-light text-center d-flex align-items-center" href="{{route('user-site')}}" role="button" title="Back to User Site">
                <i class="fas fa-user-circle" style="font-size: 25px"></i> <span class="ml-1">User Site</span>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->