<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.common.head')
    <title>Admin panel | @yield('title')</title>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

@include('admin.common.nav')
@yield('content')
@include('admin.common.footer')



<div class="col-12">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>



    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('/assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('/assets/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/assets/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/assets/dist/js/demo.js') }}"></script>

<script src="{{ asset('/assets/js/moviesPage.js') }}"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/assets/dist/js/pages/dashboard2.js') }}"></script>
</body>
</html>
