<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Waroeng Distroe | DafiSCode</title>

    <!-- Bootstrap -->
    <link href="{{url('public')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('public')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('public')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('public')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('public')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{url('public')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    
            <!-- sidebar menu -->
            @include('adsection.sidebar')
            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url('home')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        <!-- top navigation -->
        @include('adsection.navbar')
        <!-- /top navigation -->


        <!-- page content wadah -->
        <div class="right_col" role="main">
          <!-- page content -->
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                @include('adsection.utils.notif')
              </div>
            </div>
          </div>
          @yield('content')
          <!-- page content -->
        </div>
        <!-- /page content wadah -->

        <!-- footer content -->
        @include('adsection.footer')
        <!-- /footer content -->

      </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('public')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="{{url('public')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('public')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{url('public')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{url('public')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="{{url('public')}}/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="{{url('public')}}/vendors/raphael/raphael.min.js"></script>
    <script src="{{url('public')}}/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="{{url('public')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('public')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="{{url('public')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{url('public')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{url('public')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{url('public')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{url('public')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{url('public')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{url('public')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{url('public')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{url('public')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{url('public')}}/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('public')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{url('public')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('public')}}/build/js/custom.min.js"></script>

  </body>
</html>