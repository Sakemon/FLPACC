@extends('Layout.Content')
@section('body')


    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <center><img src="public/logoacc.png"  width="150px" class="img-responsive" alt="" style="padding:15px"></a></center>
            </div>


            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix" style="padding-top:100px">

            <div class="profile_info">
            <!-- <a href="homepageadmin" class="site_title"> <span>FLP</span></a> -->
            <!-- <span>Selamat Datang,</span> -->
            <!-- @if(Auth::check())
            <h2><?php $user=Session::get('current_user');?><?php echo $user;?></h2>
            @else
            return redirect::to('admin');
            @endif -->
          </div>
           </div>
          <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <!-- <li><a href="homepageadmin"><i class="fa fa-home"></i> Beranda</a></li>
                  <li><a href="{{URL::to('PenggunaTampil')}}"><i class="fa fa-user"></i> Pengguna</a></li>
                  <li><a href="{{URL::to('DepartemenTampil')}}"><i class="fa fa-bank"></i> Departemen</a></li>
                  <li><a href="{{URL::to('LokasiTampil')}}"><i class="fa fa-location-arrow"></i> Lokasi</a></li>-->
                  <li><a><i class="fa fa-history"></i> Customer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::to('viewpending')}}">Pending</a></li>
                      <li><a href="{{URL::to('viewaccept')}}">Accept</a></li>
                      <li><a href="{{URL::to('viewrefuse')}}">Refuse</a></li>
                    </ul>
                  </li>
                  <li><a href="{{URL::to('viewplafond')}}"><i class="fa fa-users"></i> Plafond</a></li>
                  <!-- <li><a href="{{URL::to('AssetTampil')}}"><i class="fa fa-server"></i> Asset</a></li>  -->
                  <!-- <li><a><i class="fa fa-book"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::to('LaporanPendapatanTampil')}}">Laporan Pendapatan</a></li>
                      <li><a href="{{URL::to('LaporanTransaksiTampil')}}">Laporan Transaksi</a></li>
                    </ul>
                  </li> -->
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
                    Log Out
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
                <h3>@yield('page_title')</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            @yield('section')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
         <footer>
          <div class="pull-right">
            SMSystem - 2017
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
       </div>
    </div>
  @stop
