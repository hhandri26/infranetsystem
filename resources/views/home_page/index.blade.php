<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kursus IT Programing BSD | Infranetsystem | Jasa Pembuatan Website dan mobile Apps BSD Tangerang selatan">
        <meta name="keywords" content="Kursus IT Programing BSD | Infranetsystem | Jasa Pembuatan Website dan mobile Apps BSD Tangerang selatan">
        <meta name="author" content="https:infranetsystem.com">

        <title>Kursus IT Programing BSD | Infranetsystem | Jasa Pembuatan Website dan mobile Apps BSD Tangerang selatan</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
        <link rel="apple-touch-icon-precomposed" href="#">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="{{asset('materialize/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="{{asset('materialize/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="{{asset('materialize/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('materialize/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="{{asset('materialize/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{asset('materialize/materialize/css/materialize.min.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('materialize/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{asset('materialize/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="{{asset('materialize/style.css')}}" rel="stylesheet">
        <link href="{{asset('materialize/css/skins/seo.css')}}" rel="stylesheet">
        <link href="{{asset('materialize/css/animate.min.css')}}" rel="stylesheet">

        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('materialize/revolution/css/settings.css')}}">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('materialize/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('materialize/revolution/css/navigation.css')}}">
        <link href="{{asset('plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('pages/jquery.sweet-alert.init.js')}}"></script>
    </head>

    <body id="top" class="has-header-search">
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

        <!-- Top bar -->
        <div class="top-bar dark-bg lighten-2 visible-md visible-lg">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>                 
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                  
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>info@infranetsystem.com</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i>+62818 0878 4785</a>
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
                        <a href="index.html" class="logo-brand">
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="" >
                        </a>
                        <!--logo end-->

                        <!-- menu start-->
                        <div id="menu">
                            <ul class="menuzord-menu pull-right">
                                <li class="active"><a href="{{route('home_page')}}">Home</a></li>
                                <li><a href="{{route('tentang-kami')}}">Tentang Kami</a></li>
                                <li><a href="{{route('produk')}}">Produk</a></li>
                                <li><a href="{{route('pelatihan')}}">Pelatihan</a></li>
                                <li><a href="#">Artikel</a></li>
                                <li><a href="#">Hubungi kami</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                                

                            </ul>
                        </div>
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
                            <img src="{{asset('img/logo-pt.jpg')}}" alt="">
                          </div>

                          <span class="copy-text">Copyright &copy; 2016 <a href="#">Materialize</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By <a href="#">TrendyTheme</a></span>
                          <div class="footer-intro">
                            <p>Penatibus tristique velit vestibulum adipiscing habitant aenean feugiat at condimentum aptent odio orci vulputate hac mollis a.Vestibulum adipiscing gravida justo a ac euismod vitae.</p>
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
            <img src="{{asset('img/loading2.gif')}}" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="{{asset('materialize/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{asset('materialize/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('materialize/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('materialize/js/smoothscroll.min.js')}}"></script>
        <script src="{{asset('materialize/js/menuzord.js')}}"></script>
        <script src="{{asset('materialize/js/bootstrap-tabcollapse.min.js')}}"></script>
        <script src="{{asset('materialize/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('materialize/js/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('materialize/js/imagesloaded.js')}}"></script>
        <script src="{{asset('materialize/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('materialize/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('materialize/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('materialize/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('materialize/js/scripts.js')}}"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="{{asset('materialize/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('materialize/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- global js -->
        
       


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('pages/jquery.sweet-alert.init.js')}}"></script>
        <script src="{{asset('materialize/js/wow.min.js')}}"></script>
        <script src="{{asset('js/global.js')}}"></script>
        <link href="{{asset('materialize/css/shortcodes/login.css')}}" rel="stylesheet">
        

    </body>
  
</html>