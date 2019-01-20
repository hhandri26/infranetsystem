

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard -> Framework handri User: {{ Auth::user()->name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="{{asset('css/icons.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('pages/jquery.sweet-alert.init.js')}}"></script>
        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
         <style type="text/css">
            .error{
                color: red;
            }

            .width-logo{
                width: 240px;
                background-color: #fff;
                height: 65px;
            }

            @media (max-width: 991px) {
                  .width-logo {
                    display: none;
                }
        </style>

    </head>


    <body>
        @include('sweet::alert')
        @if(session('sukses'))
            <script>
                  swal({
                      title: "Sukses!",
                      text: '{{session('pesan')}}',
                      timer: 3000,
                      showConfirmButton: false,
                      type: 'success'
                  });
              </script>
        @endif

         @if(session('gagal'))
            <script>
              swal({
                  title: "gagal!",
                  text: '{{session('gagal')}}',
                  timer: 3000,
                  showConfirmButton: false,
                  type: 'warning'
              });
          </script>  
        @endif      

       

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="width-logo">
                        <a href="{{url('home')}}" class="logo">
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="logo" class="logo-lg" style="height: 55px" />
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                          

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                               
                               

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true">
                                    <img class="user-avatar" src="{{asset('img/users/default.png')}}" class="img-circle" alt="..."/>
                                                                      
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i>Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Change Password</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <i class="ti-power-off m-r-10"></i> Logout
                                            </a>  

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                            
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img class="user-avatar" src="{{asset('img/users/default.png')}}" class="thumb-md img-circle" alt="..."/>
                                </div>
                                <div class="user-info">
                                    <a href="#">{{ Auth::user()->name }}</a>
                                    
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="#"><i class="ti-home"></i> Dashboard </a></li>
                                @if(Auth::user()->level == 1)
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-users"></i> Users <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#">Group Users</a></li>
                                        <li><a href="{{ route('users.index')}}">Users</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-gear"></i> ACL <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#">Group Menu</a></li>
                                        <li><a href="#">Sub Menu</a></li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-gears"></i> Utility <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="#">Cetak PDF</a></li>
                                        <li><a href="#">Cetak Excel</a></li>
                                        <li><a href="#">QR Code</a></li>
                                        <li><a href="#">Import Excel</a></li>
                                        <li><a href="#">Upload Document</a></li>
                                    </ul>
                                </li>
                                @else
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-users"></i> Level 2 <span class="fa arrow"></span></a>
                                   
                                </li>
                                @endif

                             

                               

    
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        @yield('content')
                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
       
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/metisMenu.min.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('pages/jquery.dashboard.js')}}"></script>

        <!-- App Js -->
        
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('pages/jquery.datatables.init.js')}}"></script>

        <script src="{{asset('js/jquery.app.js')}}"></script>
        <script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('pages/jquery.sweet-alert.init.js')}}"></script>

    </body>
</html>
