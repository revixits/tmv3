<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TMV3 | {{ $pageTitle }}</title>

    @include('layouts.assets.main-css')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.main-navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.main-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.main-footer')

        <!-- Control Sidebar -->
        {{-- @include('layouts.main-ctrlsidebar') --}}
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('layouts.assets.main-js')
</body>

</html>
