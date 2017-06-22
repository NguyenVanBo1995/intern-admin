<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restaurant</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('/public/assets')}}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/public/assets')}}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/public/assets')}}/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    @yield('extra-css-lib')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @section('includes/header')
      @include('includes/header')
      @show
      <!-- Left side column. contains the logo and sidebar -->
      @section('sidebar')
      @include('includes/sidebar')
      @show
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      @yield('content')
      </div>
      <!-- /.content-wrapper -->
      @section('includes/footer')
      @include('includes/footer')
      @show
      <!-- Control Sidebar -->

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3.1.1 -->
    <script src="{{url('/public/assets')}}/plugins/jQuery/jquery-3.1.1.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{url('/public/assets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('/public/assets')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Slimscroll -->
    <script src="{{url('/public/assets')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('/public/assets')}}/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('/public/assets')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('/public/assets')}}/dist/js/demo.js"></script>
    @yield('extra-js-lib')
  </body>
</html>