<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard -> Framework handri </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('public/css/metisMenu.min.css')}}" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
        <script src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>
         <link href="{{asset('public/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .has-error{
                color: red;
            }
        </style>

    </head>


    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="{{asset('public/img/logo-pt.jpg')}}" alt="" height="100"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    
                                   @yield('content')

                                </div>
                            </div>
                            <!-- end card-box-->


                            

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/admin/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('public/admin/js/jquery.slimscroll.min.js')}}"></script>

        <!-- App Js -->
        <script src="{{asset('public/admin/js/jquery.app.js')}}"></script>
        <script src="{{asset('public/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/pages/jquery.form-advanced.init.js')}}"></script>

    </body>
</html>