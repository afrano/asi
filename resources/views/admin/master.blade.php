<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

        <title>Halaman Dashboar Ayah Asi </title>
        <!-- Bootstrap -->
        <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{asset('admin/vendors/iCheck/skins/flat/greenStyle.css')}}" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="{{asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>

        <!-- bootstrap-wysiwyg -->
        <link href="{{asset('admin/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
        <!-- Select2 -->
        <link href="{{asset('admin/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
        <!-- Switchery -->
        <link href="{{asset('admin/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
        <!-- starrr -->
        <link href="{{asset('admin/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script> 











        <!-- Custom Theme Style -->
        <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
    </head>

    <body class="nav-md ">
        <div class="container body" >
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">


                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{asset('admin/production/images/user.svg')}}" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Admin</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="{{'/dashboard'}}"><i class="fa fa-home"></i> Home  </a>
                                    </li>



                                    <li><a href="{{'/slider-web'}}"><i class="fa fa-sliders"></i> Slider  </a>
                                    </li>

                                    <li><a href="{{'/partai'}}"><i class="fa fa-newspaper-o"></i> Artikel  </a>
                                    </li>
                                      <li><a href="{{'/partai'}}"><i class="fa fa-book"></i> Soal Latihan  </a>
                                    </li>

                                    <li><a href="{{'/periode'}}"><i class="fa fa-user"></i> Trainer  </a>
                                    </li>
                                    <li><a href="{{'/partai'}}"><i class="fa fa-users"></i> Anggota  </a>
                                    </li>
                                    <li><a href="{{'/settings'}}"><i class="fa fa-cogs"></i> Settings </a>
                                    </li> 




                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-tasks"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('admin/production/images/user.svg')}}" alt="">sa
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
<!--                                        <a class="dropdown-item"  href="javascript:;"> <i class="fa fa-user pull-right"></i>Profile</a>
                                        <a class="dropdown-item"  href="javascript:;">
                                            <i class="fa fa-cog pull-right"></i>
                                            Settings 
                                        </a>
                                        <a class="dropdown-item"  href="javascript:;"><i class="fa fa-info pull-right"></i>Help</a>-->
                                        <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </div>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div> 
                <div class="right_col" role="main"> 
                    @yield('content')
                </div> 
                <footer>
                    <div class="pull-right">
                        SETJEN MPR RI
                    </div>
                    <div class="clearfix"></div>
                </footer> 
            </div>
        </div>

        <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
        <!-- Chart.js --> 
        <script src="{{asset('admin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
        <!-- gauge.js -->
        <script src="{{asset('admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{asset('admin/vendors/iCheck/icheck.min.js')}}"></script>
        <!-- Skycons -->
        <script src="{{asset('admin/vendors/skycons/skycons.js')}}"></script>
        <!-- Flot -->
        <script src="{{asset('admin/vendors/Flot/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/vendors/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('admin/vendors/Flot/jquery.flot.time.js')}}"></script>
        <script src="{{asset('admin/vendors/Flot/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('admin/vendors/Flot/jquery.flot.resize.js')}}"></script>
        <!-- Flot plugins -->
        <script src="{{asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
        <script src="{{asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
        <script src="{{asset('admin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
        <!-- DateJS -->
        <script src="{{asset('admin/vendors/DateJS/build/date.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
        <script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{asset('admin/vendors/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <!-- Custom Theme Scripts -->

        <script src="{{asset('admin/build/js/custom.min.js')}}"></script>
        <script src="{{asset('admin/build/js/foto.js')}}"></script>


        <!-- bootstrap-wysiwyg -->
        <script src="{{asset('admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
        <script src="{{asset('admin/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
        <script src="{{asset('admin/vendors/google-code-prettify/src/prettify.js')}}"></script>
        <!-- jQuery Tags Input -->
        <script src="{{asset('admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
        <!-- Switchery -->
        <script src="{{asset('admin/vendors/switchery/dist/switchery.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('admin/vendors/select2/dist/js/select2.full.min.js')}}"></script>
        <!-- Parsley -->
        <script src="{{asset('admin/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
        <!-- Autosize -->
        <script src="{{asset('admin/vendors/autosize/dist/autosize.min.js')}}"></script>
        <!-- jQuery autocomplete -->
        <script src="{{asset('admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
        <!-- starrr -->
        <script src="{{asset('admin/vendors/starrr/dist/starrr.js')}}"></script>


        <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
        <script src="{{asset('admin/vendors/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('admin/vendors/morris.js/morris.min.js')}}"></script> 





    </body>
</html>
