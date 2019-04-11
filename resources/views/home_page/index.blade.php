<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{$info['decription']}}">
        <meta name="keywords" content="{{$info['keywords']}}">
        <meta name="author" content="https:infranetsystem.com">
        <meta name="tag" content="{{$info['tag']}}">

        <title>{{$info['title']}}</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
        <link rel="apple-touch-icon-precomposed" href="#">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="{{asset('public/materialize/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="{{asset('public/materialize/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="{{asset('public/materialize/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('public/materialize/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="{{asset('public/materialize/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{asset('public/materialize/materialize/css/materialize.min.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('public/materialize/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{asset('public/materialize/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="{{asset('public/materialize/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/materialize/css/skins/seo.css')}}" rel="stylesheet">
        <link href="{{asset('public/materialize/css/animate.min.css')}}" rel="stylesheet">

        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('public/materialize/revolution/css/settings.css')}}">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('public/materialize/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('public/materialize/revolution/css/navigation.css')}}">
        <link href="{{asset('public/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('public/pages/jquery.sweet-alert.init.js')}}"></script>
    </head>

    <body id="top" class="has-header-search">
        <!-- Top bar -->
        <div class="top-bar dark-bg lighten-2 visible-md visible-lg">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="{{$info['facebook']}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{{$info['twitter']}}" target="_blank"><i class="fa fa-twitter"></i></a></li>                 
                  <li><a href="{{$info['instagram']}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>{{$info['email']}}</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i>{{$info['phone']}}</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.top-bar -->


        <!--header start-->
        <header id="header" class="tt-nav">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="#" class="logo-brand">
                            <img src="{{asset('/storage/app/file/contact/'.$info['logo'])}}" alt="" >
                        </a>
                        <!--logo end-->

                        <!-- menu start-->
                        
                            <ul class="menuzord-menu pull-right">
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                  <a href="{{route('home_page')}}">Home</a>
                                </li>
                                <li class="{{ request()->is('tentang-kami') ? 'active' : '' }}">
                                  <a href="{{route('tentang-kami')}}">Tentang Kami</a>
                                </li>
                                <li class="{{ request()->is('produk') ? 'active' : '' }}">
                                  <a href="{{route('produk')}}">Produk</a>
                                </li>
                                <li class="{{ request()->is('pelatihan') ? 'active' : '' }}">
                                  <a href="{{route('pelatihan')}}">Pelatihan</a>
                                </li>
                                <li class="{{ request()->is('artikel') ? 'active' : '' }}">
                                  <a href="{{route('artikel')}}">Artikel</a>
                                </li>
                                <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                                  <a href="{{route('contact-us')}}">Hubungi kami</a>
                                </li>
                                <li class="{{ request()->is('login') ? 'active' : '' }}">
                                  <a href="{{route('login')}}">Login</a>
                                </li>                           
                            </ul>
                        
                        <!-- menu end-->

                    </div>
                </div>
            </div>
        </header>
        @yield('content')



        <footer class="footer footer-four">
            <div class="primary-footer dark-bg lighten-4 text-center">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large back-top waves-effect waves-light" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                  <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>

                  <hr class="mt-15">

                  <div class="row">
                    <div class="col-md-12">
                          <div class="footer-logo">
                            <img src="{{asset('/storage/app/file/contact/'.$info['logo'])}}" alt="">
                          </div>

                         
                          <div class="footer-intro">
                            <p>{{$info['copyright']}}</p>
                          </div>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer dark-bg lighten-3 text-center">
                <div class="container">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Portfolio</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="{{asset('public/img/loading2.gif')}}" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="{{asset('public/materialize/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{asset('public/materialize/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/smoothscroll.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/menuzord.js')}}"></script>
        <script src="{{asset('public/materialize/js/bootstrap-tabcollapse.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/imagesloaded.js')}}"></script>
        <script src="{{asset('public/materialize/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('public/materialize/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/materialize/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/materialize/js/scripts.js')}}"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="{{asset('public/materialize/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('public/materialize/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- global js -->
        
       


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/materialize/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('public/pages/jquery.sweet-alert.init.js')}}"></script>
        <script src="{{asset('public/materialize/js/wow.min.js')}}"></script>
        <script src="{{asset('public/js/global.js')}}"></script>
        <link href="{{asset('public/materialize/css/shortcodes/login.css')}}" rel="stylesheet">
        <script src="{{asset('public/costum/alert.js')}}"></script>
        <script src="{{asset('public/costum/globalscript.js')}}"></script>
        

    </body>
  
</html>