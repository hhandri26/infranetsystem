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
            <div class="col-md-10"><h4 class="box-title">Form Tambah Artikel @if($id>0) Edit Artikel @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form id="form1" method="post" action="#" enctype="multipart/form-data" class="form-horizontal">
            <div class="panel panel-info">
               <div class="form-group" >
                   <label for="img" class="col-sm-3 control-label1">Gambar Artikel</label>
                        <div class="col-sm-9">
                           <img class="img-thumbnail upload_file" width="200" height="200" id="profile-pre" name="upload_file" src="@if($id>0){{asset('/storage/app/file/article/'.$get['img'])}}@else{{asset('public/img/df.jpg')}}@endif" alt="your image" />
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
                                <label for="title" class="col-sm-3 control-label1">Judul Artikel</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="title"  class="form-control" value="@if($id>0){{ $get['title']}} @endif"/>
                                </div>
                            </div>                        

                            <div class="form-group">
                                <label for="decription" class="col-sm-3 control-label1">Isi Artikel</label>
                                <div class="col-sm-9">
                                     <textarea id="decription" class="form-control">@if($id>0){{$get['decription']}}@endif</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keywords" class="col-sm-3 control-label1">keywords</label>
                                <div class="col-sm-9">
                                     <textarea id="keywords" class="form-control">@if($id>0){{$get['title']}}@endif</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-sm-3 control-label1">Tag</label>
                                <div class="col-sm-9">
                                     <textarea id="tag" class="form-control">@if($id>0){{$get['title']}}@endif</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="author" class="col-sm-3 control-label1">Penulis</label>
                                <div class="col-sm-9">
                                     <input  type="text" id="author"  class="form-control" value="@if($id>0){{ $get['author']}} @endif"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-sm-3 control-label1">Aktif?</label>
                                
                                <div class="col-sm-5">
                                    <input type="radio" class="rcheck"  name="active" id="active" name="active" value="1" @if($id>0 && $get['active']=='1') {{ "checked" }} @endif>Active
                                    <input type="radio" class="rcheck"  name="active" id="active" name="active" value="2" @if($id>0 && $get['active']=='2') {{ "checked" }} @endif>Tidak Active
                                </div>
                                                               
                            </div>

                            <div class="form-group">
                                <label for="sort" class="col-sm-3 control-label1">Urutan</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="sort"  class="form-control" value="@if($id>0){{ $get['sort']}} @endif"/>
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
        a.decription    = $('#decription').val();
        a.keywords      = $('#keywords').val();
        a.tag           = $('#tag').val();
        a.author        = $('#author').val();
        a.active        = $("input[name='active']:checked").val();
        a.sort          = $('#sort').val();
        // config Uoload
        var folder      = 'article';//folder untuk input gambar
        var table       = 't_article';//table database
        var field_name  = 'img';//nama field database yang akan di input
        var url         = "{{route('article_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';//url input data
        var obj_id      = 'profile-id';//nama id file input gambar/file
        var refresh     = 'artikel_table';// url untuk reload page setelah input data
        var url_upload  ="{{route('upload_file') }}?folder="+folder+'&table='+table+'&field_name='+field_name+'&refresh='+refresh;//url upload file
        AlertUpload('Apakah anda Yakin Menyimpan Data Ini?',url,url_upload,obj_id);
    }

    function back()
    {
        location.href="{{ route('artikel_table') }}";
    }
   
</script>
@endsection