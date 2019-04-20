<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Form Pendaftaran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('public/plugins/morris/morris.css')}}">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('public/css/metisMenu.min.css')}}" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <script src="{{asset('public/js/jquery-2.1.4.min.js')}}"></script>
        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('public/pages/jquery.sweet-alert.init.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('public/plugins/select2-3.5.4/select2.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('public/plugins/select2-3.5.4/select2-bootstrap.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style type="text/css">
            .box{
                    width: 800px;
                    height: 1200px;
                    margin: auto;
                    border-width: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);                           
                    border-radius: 10px 10px 0 0;
                    padding: 40px;
                }
                 @media (max-width: 991px) {
                  .box {
                    width: auto;
                    height: auto;
                }
        </style>
    </head>
    <body style="background-color: #fff">
        
            <div class="box">
                <div class="col-lg-12">
                    <div class="p-20 m-b-20">
                        <h4 class="header-title m-t-0">Form Pendaftaran</h4>                        

                        <div class="p-20 m-b-20">
                            <h4 class="header-title m-t-0">Data Diri</h4>
                            <form role="form" class="form-validation" action="#" id="pendaftaran">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 form-control-label">Nama Lengkap<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" parsley-trigger="change" required class="form-control" id="name" name="name" placeholder="Nama Lengkap Anda">
                                    </div>
                                </div>
                                <input type="hidden" name="url_upload" id="url_upload" value="{{route('upload_file_user')}}?folder=">
                                <input type="hidden" name="url_save" id="url_save" value="{{route('register_pendaftar')}}?data="">
                                <input type="hidden" name="getkab" id="getkab" value="{{route('getkab')}}?id=">
                                <input type="hidden" name="getkec" id="getkec" value="{{route('getkec')}}?id=">
                                <input type="hidden" name="getkel" id="getkel" value="{{route('getkel')}}?id=">
                                <input type="hidden" name="back" id="back" value="{{route('pelatihan')}}">
                                <input type="hidden" name="getjadwal" id="getjadwal" value="{{route('getjadwal')}}?id=">

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input id="email" type="email" name="email" placeholder="Email Aktif" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_identitas" class="col-sm-4 form-control-label">Nomor Identitas<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input id="no_identitas" name="no_identitas" type="text" placeholder="KTP/ SIM/ Kartu Pelajar" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-4 form-control-label">Nomor Handphone<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input id="phone" name="phone" type="text" placeholder="Nomor Aktif" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prop" class="col-sm-4 form-control-label">Provinsi<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="prop" id="prop" onchange="ajaxkota(this.value)" class="form-control select2">
                                            <option value="">- Pilih Provinsi -</option>
                                            @foreach($prov as $row)
                                             <option value="<?php echo $row->id_prov;?>"><?php echo $row->nama;?></option>
                                            @endforeach
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kota" class="col-sm-4 form-control-label">Kota / Kabupaten<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="kota" id="kota" class="form-control kota select2" onchange="ajaxkec(this.value)">
                                            <option value="">- Pilih Kota / Kabupaten -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kec" class="col-sm-4 form-control-label">Kecamatan<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="kec" id="kec" class="form-control select2" onchange="ajaxkel(this.value)">
                                            <option value="">- Pilih Kecamatan -</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="kel" class="col-sm-4 form-control-label">Kelurahan<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">                                       
                                        <select name="kel" id="kel" class="form-control select2">
                                            <option value="">- Pilih Kelurahan -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 form-control-label">Alamat Lengkap<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">                                       
                                        <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" name="alamat"></textarea>
                                    </div>
                                </div>

                                <h4 class="header-title m-t-0">Kursus Yang Di Minati</h4>
                                <div class="form-group row">
                                    <label for="id_kursus" class="col-sm-4 form-control-label">Jenis Kursus<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="id_kursus" id="id_kursus" class="form-control select2" onchange="ajaxkursus(this.value)">
                                            <option value="">- Pilih Jenis Kursus -</option>
                                            @foreach($kursus as $row2)
                                             <option value="<?php echo $row2->id;?>">{{$row2->title.' '.'Rp. '.number_format($row2->price,0)}}</option>
                                            @endforeach
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_jadwal" class="col-sm-4 form-control-label ">Jadwal<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="id_jadwal" id="id_jadwal" class="form-control select2">
                                            <option value="">- Pilih Jadwal -</option>
                                        </select>
                                    </div>
                                </div>

                                <form id="form1" enctype="multipart/form-data">
                                    
                                       <div class="form-group row" >
                                           <label for="img" class="col-sm-4 form-control-label">Foto 3X4</label>
                                                <div class="col-sm-8">
                                                   <img class="img-thumbnail upload_file" width="200" height="200" id="profile-pre" name="upload_file" src="{{asset('public/img/df.jpg')}}" alt="your image" />
                                                   <input type="file" name="upload_file" id="profile-id" >
                                            </div>                        
                                        </div>
                                    
                                </form>                              
                             
                                <div class="form-group row">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <button type="submit" onclick="CheckInput()" class="btn btn-primary waves-effect waves-light">
                                            Daftar
                                        </button>
                                        <button type="reset" onclick="back()"
                                                class="btn btn-default waves-effect m-l-5">
                                            Kembali
                                        </button>
                                    </div>
                                    <div id="the-message"></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
       


        <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('public/js/jquery.slimscroll.min.js')}}"></script>
        <!--Morris Chart-->
        <script src="{{asset('public/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('public/plugins/raphael/raphael-min.js')}}"></script>
        <!-- Dashboard init -->
        <script src="{{asset('public/pages/jquery.dashboard.js')}}"></script>
        <!-- App Js -->
        <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('public/pages/jquery.datatables.init.js')}}"></script>
        <script src="{{asset('public/js/jquery.app.js')}}"></script>
        <script src="{{asset('public/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('public/pages/jquery.sweet-alert.init.js')}}"></script>
        <script src="{{asset('public/plugins/parsleyjs/parsley.min.js')}}"></script>
        <!-- costum -->
        <script src="{{asset('public/costum/alert.js')}}"></script>
        <script src="{{asset('public/costum/globalscript.js')}}"></script>
        <script src="{{asset('public/costum/pendaftaran.js')}}"></script>
        <script src="{{asset('public/plugins/select2-3.5.4/select2.min.js')}}"></script>
        <script src="{{asset('public/plugins/select2-3.5.4/select2_locale_id.js')}}"></script>
        <script type="text/javascript">
            $(".select2").select2();
        </script>

    </body>
</html>
