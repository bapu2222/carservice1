<!DOCTYPE html>
<html lang="en">
@include('global.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('global.navigation')

    @include('global.sidebar')
    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    @include('global.footer')
    @include('global.script')
</div>
</body>
</html>