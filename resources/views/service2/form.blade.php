@extends('layouts.admin_tmp')
@section('content')
<?php $id=request()->id; ?>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
     <a href="#" onclick="back()" class="btn-floating btn-large" style="background-color: #FB0C03 ;color: #fff">
        <i style="font-size: 1.6em" class="fa  fa-arrow-circle-o-left "></i>
    </a>
</div>
<div class="box box-info" >
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-10"><h4 class="box-title"> @if($id>0) Edit Service 2 @else Form Tambah Service 2  @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form id="form1" method="post" action="#" enctype="multipart/form-data" class="form-horizontal">
            <div class="panel panel-info">
               <div class="form-group" >
                   <label for="img" class="col-sm-3 control-label1">Gambar Service 2</label>
                        <div class="col-sm-9">
                           <img class="img-thumbnail upload_file" width="200" height="200" id="profile-pre" name="upload_file" src="@if($id>0){{asset('/storage/app/file/service/'.$get['img'])}}@else{{asset('public/img/df.jpg')}}@endif" alt="your image" />
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
                                <label for="title" class="col-sm-3 control-label1">Judul Service 2</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="title"  class="form-control" value="@if($id>0){{ $get['title']}} @endif"/>
                                </div>
                            </div>                           
                            

                            <div class="form-group">
                                <label for="decription" class="col-sm-3 control-label1">Deskripsi</label>
                                <div class="col-sm-9">
                                     <textarea id="description" class="form-control">@if($id>0){{$get['description']}}@endif</textarea>
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
        var id          ="{{$id}}";
        var a           = {};
        a.title         = $('#title').val();
        a.description   = $('#description').val();
        // config Uoload
        var folder      = 'service';//folder untuk input gambar
        var table       = 't_desc';//table database
        var field_name  = 'img';//nama field database yang akan di input
        var url         = "{{route('service2_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';//url input data
        var obj_id      = 'profile-id';//nama id file input gambar/file
        var refresh     = 'service2_table';// url untuk reload page setelah input data
        var url_upload  ="{{route('upload_file') }}?folder="+folder+'&table='+table+'&field_name='+field_name+'&refresh='+refresh;//url upload file
        AlertUpload('Apakah anda Yakin Menyimpan Data Ini?',url,url_upload,obj_id);
    }

    function back()
    {
        location.href="{{ route('service2_table') }}";
    }
   
</script>
@endsection