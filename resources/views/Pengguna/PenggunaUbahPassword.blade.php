<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMSystem</title>

    <!-- Bootstrap -->
    <link href="../../public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../../public/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../../public/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../public/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../../public/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>SMSystem</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../public/foto_pelanggan/default_pelanggan.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                @if(Auth::check())
                <h2><?php $user=Session::get('current_user');?><?php echo $user;?></h2>
                @endif
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
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
                  <a href="{{URL::to('keluar')}}">
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Kata Sandi Petugas</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    {{Form::model($petugas, array('route'=>array('Petugas.updatePassword', $petugas->id_petugas),'class'=>'form-horizontal form-label-left input_mask'))}}
                      <div class="col-xs-6">
                          <div class="form-group" style="margin-top:20px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kata Sandi Baru</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              {{ Form::password('password_petugas', array('placeholder'=>'Kata Sandi Baru', 'class'=>'form-control' ) ) }}
                            </div>
                          </div>
                      </div>

                      <div class="row">
                      </div>

                      <div class="row">
                        <div class="ln_solid" ></div>
                          <div class="form-group" style="text-align:center">
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <a class="btn btn-primary " href="{{URL::to('PetugasTampil')}}">Batal</a>
                              {{Form::submit('Ubah',array('type'=>'submit','class'=>'btn btn-danger'))}}
                            </div>
                          </div>
                        </div>

                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SMSystem - 2017
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../public/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../public/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../public/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../public/vendors/moment/min/moment.min.js"></script>
    <script src="../../public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../../public/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../../public/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../../public/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../../public/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../../public/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../../public/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../../public/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../../public/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../../public/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../../public/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../public/build/js/custom.min.js"></script>

  </body>
</html>
