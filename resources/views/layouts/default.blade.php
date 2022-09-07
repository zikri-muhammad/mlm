<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLM || App</title>

    @include('includes.header')

</head>
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')

    <body class="hold-transition sidebar-mini">
@else
        <body class="hold-transition login-page">
@endif
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    <div class="wrapper">
@endif

{{-- Navbar --}}
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    @include('includes.navbar')
@endif
{{-- End Navbar --}}

<!-- Main Sidebar Container -->
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    @include('includes.sidebar')
@endif
{{-- End Main sidebar Container --}}

<!-- Content Wrapper. Contains page content -->
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    <div class="content-wrapper">
@endif
<!-- Content Header (Page header) -->
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endif
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    @yield('content')
</div>
<!-- /.content -->

@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    </div>
@endif
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
@endif
<!-- /.control-sidebar -->

<!-- Main Footer -->
@if (Route::current()->getName() != 'login' && Route::current()->getName() != 'register')
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 </strong>
    </footer>
@endif
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('includes.scripts')
@include('sweetalert::alert')

</body>
</html>
