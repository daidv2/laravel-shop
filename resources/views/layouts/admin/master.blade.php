<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.admin.navbar')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('controller')
                        <small>@yield('action')</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-{{ Session::get('flash_level') }}">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                @yield('content')
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/admin/dist/js/sb-admin-2.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ asset('/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>

<!-- Custom JavaScript -->
<script src="{{ asset('/admin/js/index.js') }}"></script>
</body>

</html>
