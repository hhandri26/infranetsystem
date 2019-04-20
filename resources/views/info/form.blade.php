@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
</div>
<div class="box box-info" >
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-10"><h4 class="box-title">Contact Info @if($id>0) Update Contact Info @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form id="form1" method="post" action="#" enctype="multipart/form-data" class="form-horizontal">
            <div class="panel panel-info">
               <div class="form-group" >
                   <label for="img" class="col-sm-3 control-label1">Logo</label>
                        <div class="col-sm-9">
                           <img class="img-thumbnail upload_file" width="200" height="200" id="profile-pre" name="upload_file" src="{{asset('/storage/app/file/contact/'.$get['img'])}}" alt="your image" />
                           <input type="file" name="upload_file" id="profile-id" >
                    </div>                        
                </div>
            </div>
        </form>
        <form class="form-horizontal">
            <div class="box-body1">
                <div class="panel panel-info">
                    <div class="panel-heading1"></div>     
                        <div class="panel-body">


                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label1">Email</label>
                                <div class="col-sm-9">
                                    <input  type="email" id="email"  class="form-control" value="{{ $get['email']}}"/>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label1">Phone</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="phone"  class="form-control" value="{{ $get['phone']}}"/>
                                </div>
                            </div>                         

                            <div class="form-group">
                                <label for="address" class="col-sm-3 control-label1">Alamat</label>
                                <div class="col-sm-9">
                                     <textarea id="address" class="form-control">{{$get['address']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="facebook" class="col-sm-3 control-label1">facebook</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="facebook"  class="form-control" value="{{ $get['facebook']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twitter" class="col-sm-3 control-label1">twitter</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="twitter"  class="form-control" value="{{ $get['twitter']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="instagram" class="col-sm-3 control-label1">instagram</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="instagram"  class="form-control" value="{{ $get['instagram']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="linkedin" class="col-sm-3 control-label1">linkedin</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="linkedin"  class="form-control" value="{{ $get['linkedin']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label1">Title</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="title"  class="form-control" value="{{ $get['title']}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="decription" class="col-sm-3 control-label1">Deskripsi</label>
                                <div class="col-sm-9">
                                     <textarea id="decription" class="form-control">{{$get['decription']}}</textarea>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="keywords" class="col-sm-3 control-label1">Keywords</label>
                                <div class="col-sm-9">
                                     <textarea id="keywords" class="form-control">{{$get['keywords']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-sm-3 control-label1">Tag</label>
                                <div class="col-sm-9">
                                     <textarea id="tag" class="form-control">{{$get['tag']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="maps" class="col-sm-3 control-label1">Maps</label>
                                <div class="col-sm-9">
                                     <textarea id="maps" class="form-control">{{$get['maps']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="copyright" class="col-sm-3 control-label1">copyright</label>
                                <div class="col-sm-9">
                                     <input  type="text" id="copyright"  class="form-control" value="{{ $get['copyright']}}"/>
                                </div>
                            </div>


                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function SaveWarning(){
        var id      ="{{$id}}";
        var a       = {};
        a.email     = $('#email').val();
        a.phone     = $('#phone').val();
        a.address   = $('#address').val();
        a.facebook  = $('#facebook').val();
        a.twitter   = $('#twitter').val();
        a.instagram = $('#instagram').val();
        a.linkedin  = $('#linkedin').val();
        a.title     = $('#title').val();
        a.decription= $('#decription').val();
        a.keywords  = $('#keywords').val();
        a.tag       = $('#tag').val();
        a.maps      = $('#maps').val();
        a.copyright = $('#copyright').val();
        // config Uoload
        var folder      = 'contact';//folder untuk input gambar
        var table       = 't_info';//table database
        var field_name  = 'logo';//nama field database yang akan di input
        var url         = "{{route('info_update') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';//url input data
        var obj_id      = 'profile-id';//nama id file input gambar/file
        var refresh     = 'info_form';// url untuk reload page setelah input data
        var url_upload  ="{{route('upload_file') }}?folder="+folder+'&table='+table+'&field_name='+field_name+'&refresh='+refresh;//url upload file
        AlertUpload('Apakah anda Yakin Mengupdate Data Ini?',url,url_upload,obj_id);
    }

   
</script>
@endsection