@extends('layouts.admin_tmp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Dashboard<small>Admin</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="fa fa-users"></i><b>8954</b></h3>
                                <p class="text-muted">Total Pendaftar</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="fa fa-book"></i><b>7841</b></h3>
                                <p class="text-muted">Total Article</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center">
                                <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i><b>6521</b></h3>
                                <p class="text-muted">Total Katagori Pelatihan</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget-inline-box text-center b-0">
                                <h3 class="m-t-10"><i class="fa fa-area-chart"></i><b>325</b></h3>
                                <p class="text-muted">Total Pengunjung</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Summary <small>Pendaftar</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="demo-container" style="height:280px">
                            <div id="areaChart" class="demo-placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- script chart -->
<script src="{{asset('public/gantela/vendors/jquery-knob/js/jquery.knob.js')}}"></script>
<script src="{{asset('public/gantela/vendors/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('public/gantela/vendors/Chart.js/dist/Chart.bundle.js')}}"></script>
<script src="{{asset('public/gantela/vendors/Chart.js/dist/Chart.min.js')}}"></script>

@endsection
