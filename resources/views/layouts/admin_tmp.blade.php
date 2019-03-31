<?php

$user_id = Auth::user()->id;

if ($user_id==1){      
      $sql2="a.id>0";
    }else{
      $sql2="a.user_id=".$user_id;
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard -> User: {{ Auth::user()->name }} </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/gantela/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/gantela/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/gantela/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{asset('public/gantela/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/gantela/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fab/css/jquery-fab-button.min.css')}}" rel="stylesheet">
    <script src="{{asset('public/fab/js/jquery-fab-button.min.js')}}"></script>
    <script src="{{asset('public/costum/global.css')}}"></script>
    <!-- cos -->
    <link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
    <script src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>
    <link href="{{asset('public/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('public/pages/jquery.sweet-alert.init.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('public/plugins/select2/css/select2.min.css')}}">
    <style type="text/css">
            .error{
                color: red;
            }

            .width-logo{
                width: 230px;
                background-color: #fff;
                height: 65px;
            }

            @media (max-width: 991px) {
                  .width-logo {
                    display: none;
                }
        </style>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <div class="width-logo">
                        <a href="{{url('home')}}" class="logo">
                            <img src="{{asset('public/img/logo-pt.jpg')}}" alt="logo" class="logo-lg" style="height: 55px" />
                            <img src="{{asset('public/img/logo-pt.jpg')}}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('public/img/users/default.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>{{ Auth::user()->name }}</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                 @foreach(App\Models\MenuModels::select('a.user_id','a.menu_id','b.menu_name as menu','b.icon as icon','b.id as id_menu')->leftjoin('t_menu as b','a.menu_id','=','b.id')->whereRaw($sql2)->orderby('b.sort','ASC')->get() as $row)
                    <li><a><i class="{{$row->icon}}"></i>{{$row->menu}} <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                         @foreach(App\Models\SubMenuModels::select('a.id_menu','a.sub_menu_name','a.url')->where('a.id_menu',$row->menu_id)->get() as $row2)
                        <li><a href="{{route($row2->url)}}">{{$row2->sub_menu_name}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
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
                    <img src="{{asset('public/img/users/default.png')}}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out pull-right"></i> Logout
                        </a>  

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        
                    </li>
                  </ul>
                </li>

              
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
           @yield('content')
        
        </div>
        <!-- /page content -->

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

    
    <!-- Bootstrap -->
    <script src="{{asset('public/gantela/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/gantela/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('public/gantela/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('public/gantela/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/gantela/build/js/custom.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('public/pages/jquery.datatables.init.js')}}"></script>

    <script src="{{asset('public/js/jquery.app.js')}}"></script>
    <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    
    <script src="{{asset('public/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('public/costum/alert.js')}}"></script>
    <script src="{{asset('public/costum/globalscript.js')}}"></script>
    <script type="text/javascript">
    $(".select2").select2();
    </script>
  </body>
</html>