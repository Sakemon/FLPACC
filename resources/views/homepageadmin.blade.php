<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FLP</title>

    <!-- Bootstrap -->
    <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <img src="public/logoacc.png"  width="100px" class="img-responsive" alt="" style="padding:15px"></a> -->
              <a><center><img src="public/logoacc.png" width="100px" class="img-responsive" style="padding:15px"/></center></a>
              <!-- <a href="homepageadmin" class="site_title"> <span>FLP</span></a> -->

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix" style="padding-top:40px">
              <div class="profile_info">
                <span>Selamat Datang,</span>
                @if(Auth::check())
                <h2><?php $user=Session::get('current_user');?><?php echo $user;?></h2>
                @endif
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="homepageadmin"><i class="fa fa-home"></i> Beranda</a></li>
                  <li><a href="{{URL::to('PenggunaTampil')}}"><i class="fa fa-user"></i> Pengguna</a></li>
                  <li><a href="{{URL::to('DepartemenTampil')}}"><i class="fa fa-bank"></i> Aplikasi In</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="{{URL::to('logout')}}">
                    Keluar
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->
          <br />
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            FLP - 2018
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="public/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/vendors/Flot/jquery.flot.js"></script>
    <script src="public/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/vendors/moment/min/moment.min.js"></script>
    <script src="public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/build/js/custom.min.js"></script>

  </body>
</html>
