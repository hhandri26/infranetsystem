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
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style type="text/css">
            .box{
                    width: 800px;
                    height: 800px;
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
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="p-20 m-b-20">
                        <h4 class="header-title m-t-0">Form Pendaftaran</h4>                        

                        <div class="p-20 m-b-20">
                            <form role="form" class="form-validation" action="{{route('pendaftaran.store')}}" id="pendaftaran">
                                {{ csrf_field() }}

                                <div class="form-group row {{ $errors->has('level') ? ' has-error' : '' }}">
                                    <label for="name" class="col-sm-4 form-control-label">Nama<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nama" value="{{ old('nama') }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_identitas" class="col-sm-4 form-control-label">Nomor Identitas<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input id="no_identitas" name="no_identitas" type="text" placeholder="KTP/ SIM/ Kartu Pelajar" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="provinsi" class="col-sm-4 form-control-label">Provinsi<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="prov" id="prov" class="form-control">
                                            <option>- Pilih Provinsi -</option>
                                          
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kab" class="col-sm-4 form-control-label">Kota / Kabupaten<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="kab" id="kab" class="form-control">
                                            <option>- Pilih Kota / Kabupaten -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kec" class="col-sm-4 form-control-label">Kecamatan<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                       
                                        <select name="kec" id="kec" class="form-control">
                                            <option>- Pilih Kecamatan -</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="kel" class="col-sm-4 form-control-label">Kelurahan<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">                                       
                                        <select name="kel" id="kel" class="form-control">
                                            <option>- Pilih Kelurahan -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-4 form-control-label">Alamat Lengkap<span class="text-danger">*</span></label>
                                    <div class="col-sm-7">                                       
                                        <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" name="alamat"></textarea>
                                    </div>
                                </div>
                                

                             
                                <div class="form-group row">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Register
                                        </button>
                                        <button type="reset"
                                                class="btn btn-default waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                    <div id="the-message"></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
              $('#pendaftaran').submit(function(e){
                e.preventDefault();

                var me = $(this);

                $.ajax({
                    url: me.attr('action'),
                    type: 'POST',
                    data: me.serialize(),
                    dataType: 'JSON',
                    success: function(response){
                      if (response.success == true) {
                                // if success we would show message
                                // and also remove the error class
                                $('#the-message').append('<div class="alert alert-success">' +
                                    '<span class="glyphicon glyphicon-ok"></span>' +
                                    ' Data has been saved' +
                                    '</div>');
                                $('.form-group').removeClass('has-error')
                                                .removeClass('has-success');
                                $('.text-danger').remove();
                                 swal({
                                      title: "Sukses!",
                                      text: 'Telah sukses mendaftar',
                                      timer: 3000,
                                      showConfirmButton: false,
                                      type: 'success'
                                  });

                                // reset the form
                                me[0].reset();

                                // close the message after seconds
                                $('.alert-success').delay(500).show(10, function() {
                                    $(this).delay(3000).hide(10, function() {
                                        $(this).remove();
                                    });
                                })
                            }
                            else {
                                $.each(response.messages, function(key, value) {
                                    var element = $('#' + key);

                                    element.closest('div.form-group')
                                    .removeClass('has-error')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                    .find('.text-danger')
                                    .remove();

                                    element.after(value);
                                });
                            }
                    }
                });

              });
            });

        </script>
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

    </body>
</html>
