<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Project Management | @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="project Management Web Apps" name="description" />
  <meta content="Dhika Syaiful Bahri" name="author" />

  @include('layouts.css')

</head>

<body data-topbar="dark" data-layout="horizontal">

  @include('layouts.loader')

  <!-- Begin page -->
  <div id="layout-wrapper">

    @include('layouts.header')
    @include('layouts.topnav')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">

          @yield('content')

        </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      @include('layouts.modal')

      @include('layouts.footer')
    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  @include('layouts.rightbar')

  @include('layouts.js')

  @stack('custom-js')

  <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
