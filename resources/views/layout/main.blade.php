<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <link rel="icon" href="{{ URL::asset('img/favicon.png') }}"/>
        <!-- Bootstrap -->
          <link rel="stylesheet" href="{{ URL::asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" />
          <!-- Font Awesome -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/font-awesome/css/font-awesome.min.css') }}" />
          <!-- NProgress -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/nprogress/nprogress.css ') }}" />
          <!-- iCheck -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/iCheck/skins/flat/green.css ') }}" />

          <!-- bootstrap-progressbar -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" />
          <!-- JQVMap -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/jqvmap/dist/jqvmap.min.css ') }}" />
          <!-- bootstrap-daterangepicker -->
            <link rel="stylesheet" href="{{URL::asset('/vendors/bootstrap-daterangepicker/daterangepicker.css ') }}" />

          <!-- Custom Theme Style -->
            <link rel="stylesheet" href="{{URL::asset('../build/css/custom.min.css') }}" />

    </head>
    <body class="nav-md">

      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><img src="{{ URL::asset('img/favicon.png') }}" alt="Smiley face" class="img-circle"></i> <span>ALC (Pvt) Ltd.</span></a>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span>
                  <h2>@yield('name')</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->

              <br />

              <!-- sidebar menu -->
              @yield('sidemenu')
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
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
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
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">@yield('name')
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="javascript:;"> Profile</a></li>
                      <li>
                        <a href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li><a href="javascript:;">Help</a></li>
                      <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                  </li>

                  <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="text-center">
                          <a>
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->
            @yield('content')


          <!-- footer content -->
          <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>

      <!-- jQuery -->
      <script type="text/javascript" src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('/vendors/jquery/dist/jquery.min.js') }}"></script>

      <!-- Bootstrap -->
      <script type="text/javascript" src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- FastClick -->
      <script type="text/javascript" src="{{ URL::asset('vendors/fastclick/lib/fastclick.js') }}"></script>
      <!-- NProgress -->
      <script type="text/javascript" src="{{ URL::asset('vendors/nprogress/nprogress.js') }}"></script>
      <!-- Chart.js -->
      <script type="text/javascript" src="{{ URL::asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
      <!-- gauge.js -->
      <script type="text/javascript" src="{{ URL::asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
      <!-- bootstrap-progressbar -->
      <script type="text/javascript" src="{{ URL::asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
      <!-- iCheck -->
      <script type="text/javascript" src="{{ URL::asset('vendors/iCheck/icheck.min.js') }}"></script>
      <!-- Skycons -->
      <script type="text/javascript" src="{{ URL::asset('vendors/skycons/skycons.js/vendors/skycons/skycons.js') }}"></script>
      <!-- Flot -->
      <script type="text/javascript" src="{{ URL::asset('vendors/Flot/jquery.flot.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/Flot/jquery.flot.time.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/Flot/jquery.flot.resize.js') }}"></script>

      <!-- Flot plugins -->
      <script type="text/javascript" src="{{ URL::asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
      <!-- DateJS -->
      <script type="text/javascript" src="{{ URL::asset('vendors/DateJS/build/date.js') }}"></script>
      <!-- JQVMap -->
      <script type="text/javascript" src="{{ URL::asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
      <!-- bootstrap-daterangepicker -->
      <script type="text/javascript" src="{{ URL::asset('vendors/moment/min/moment.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

      <!-- Custom Theme Scripts -->
      <script type="text/javascript" src="{{ URL::asset('build/js/custom.min.js') }}"></script>

    </body>
</html>
