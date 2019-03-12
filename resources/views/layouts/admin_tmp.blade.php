<?php


$akses      = auth()->user()->level;
if ($akses ==1) {
  $menu       = DB::table('t_group_menu as a')
              ->select('a.id','a.nama as menu','a.level','a.icon')
              ->get();

}else{
    $menu    = DB::table('t_group_menu as a')
              ->select('a.id','a.nama as menu','a.level','a.icon')
              ->where('a.level',$akses)
              ->get();
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

    <title>Dashboard -> Framework handri User: {{ Auth::user()->name }} </title>

    <!-- Bootstrap -->
    <link href="{{asset('gantela/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gantela/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gantela/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{asset('gantela/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gantela/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- cos -->
    <link href="{{asset('css/icons.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
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
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <div class="width-logo">
                        <a href="{{url('home')}}" class="logo">
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="logo" class="logo-lg" style="height: 55px" />
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('img/users/default.png')}}" alt="..." class="img-circle profile_img">
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
                  @if(Auth::user()->level == 1)
                    <li>
                      <a>
                        <i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span>
                      </a>
                        <ul class="nav child_menu">
                          <li><a href="{{route('level_users.index')}}">Group Users</a></li>
                          <li><a href="{{ route('users.index')}}">Users</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-gear"></i> ACL <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Controllers</a></li>
                        <li><a href="#">Method</a></li>
                        <li><a href="{{route('groupmenu.index')}}">Group Menu</a></li>
                        <li><a href="{{route('submenu.index')}}">Sub Menu</a></li>
                      </ul>
                    </li>

                     <li><a><i class="fa fa-file-pdf-o"></i> Utility <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Cetak PDF</a></li>
                        <li><a href="#">Cetak Excel</a></li>
                        <li><a href="#">QR Code</a></li>
                        <li><a href="#">Import Excel</a></li>
                        <li><a href="#">Upload Document</a></li>
                      </ul>
                    </li>
                  @endif

                    <!--  -->
                    @foreach($menu as $row)
                    <li><a><i class="fa {{$row->icon}}"></i> {{$row->menu}} <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <?php 
                           $submenu= DB::table('t_sub_menu')
                                    ->select('*')
                                    ->where('groupmenu_id',$row->id)
                                    ->get();
                        ?>
                          @foreach($submenu as $row2)
                            <li><a href="#">{{$row2->nama_sub}}</a></li>
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
                    <img src="{{asset('img/users/default.png')}}" alt="">{{ Auth::user()->name }}
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
    <script src="{{asset('gantela/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('gantela/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('gantela/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('gantela/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('gantela/build/js/custom.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('pages/jquery.datatables.init.js')}}"></script>

    <script src="{{asset('js/jquery.app.js')}}"></script>
    <script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('pages/jquery.sweet-alert.init.js')}}"></script>
  </body>
</html>