<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TobaHome</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/adminlte/css/rating.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./dashboard" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./dashboard" class="brand-link">
                <img src="/adminlte/img/logo.png" class="brand-image img-circle-10" style="opacity: .8">
                <span class="brand-text font-weight-light">TobaHome</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="./akun" class="d-block">Owner</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="./dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./booking" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Booking
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./visitor" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Visitor
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Homestay
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./homestay" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Homestay List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Room & Facility
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./type" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Room Type</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./facilities" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Facility</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="./review" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Review
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
</body>

</html>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- Bootstrap Switch -->
<script src="/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>




<!-- bs-custom-file-input -->
<script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

@yield('footer')