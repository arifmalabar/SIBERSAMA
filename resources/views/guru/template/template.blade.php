<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/jqvmap/jqvmap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css')}} ">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{ asset('template/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="shortcut icon" href="{{asset('foto/k8.png')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="flash-data" data-flashdata="{{ session()->get('pesan') }}"></div>
    <div class="flash-error" data-flashdata="{{ session()->get('errmsg') }}"></div>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('foto/rpl.png') }}" alt="Logo RPL" height="150" width="150">
        <center>Harap Tunggu...</center>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <form action="/do_logout" class="form-logout" method="post">
                    @csrf
                    <a href="#" type="submit" onclick="confirmDlg('Apakah YAkin Logout', 'Logout', 'warning', 'Logout')" class="nav-link" id="btn-logout">Logout</a>
                </form>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  sidebar-light-info elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('foto/k8.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SiBersama</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('foto/profile/5.png')}}" class="img-circle elevation-2" style="margin-top: 10px" height="100" width="100" alt="User Image">
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="d-block">{{ auth()->guard('guru')->user()->nama }}</a>
                        </div>
                        <div class="col-md-12">
                            <span class="right badge badge-info">Guru</span>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-header">Utama</li>
                    <li class="nav-item">
                        <a href="/guru" class="nav-link {{ $judul == "Dashboard" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pereferensi" class="nav-link {{ $judul == "Data Pereferensi" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Data Pereferensi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kriteria" class="nav-link {{ $judul == "Data Kriteria" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-store"></i>
                            <p>Data Kriteria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/jenis_kriteria" class="nav-link {{ $judul == "Data Jenis Kriteria" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Jenis Kriteria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ $judul == "Siswa" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Siswa</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach($data_kelas_ul as $kelas)
                                <li class="nav-item">
                                    <a href="/siswa/{{$kelas->kode_kelas}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{ $kelas->nama_kelas }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-header">Pelanggaran</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ $judul == "Siswa" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Entry Pelanggaran</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach($data_kelas_ul as $kelas)
                                <li class="nav-item">
                                    <a href="/siswa/{{$kelas->kode_kelas}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{ $kelas->nama_kelas }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/remisi_pelanggaran" class="nav-link {{ $judul == "Siswa" ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Remisi Pelanggaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fa fa-user-check"></i>
                            <p>MPK</p>
                        </a>
                    </li>
                    <!--<li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="./index.html" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v1</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="./index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v2</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="./index3.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v3</p>
                          </a>
                        </li>
                      </ul>
                    </li>-->
                    <li class="nav-header">Laporan</li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>Laporan <Pelanggaran></Pelanggaran></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/laporan_perbandingan" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>Laporan Perbandingan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/laporan_pelanggaran" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>Penentuan Siswa Bermasalah</p>
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
    <footer class="main-footer">
        <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">SiBersama</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('template/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('sweetalert2/dist/sweetalert2.min.js')}}"></script>
<!-- Message -->
<script src="{{asset('script/message.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
        $("#example3").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    });
</script>
</body>
</html>
