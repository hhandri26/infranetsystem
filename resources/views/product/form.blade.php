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
            <div class="col-md-10"><h4 class="box-title"> @if($id>0) Edit Product @else Form Tambah Product @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form class="form-horizontal">
            <div class="box-body1">
                <div class="panel panel-info">
                    <div class="panel-heading1"></div>     
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="icon" class="col-sm-3 control-label1">Icon</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="icon"  class="form-control" value="@if($id>0){{ $get['icon']}} @endif"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label1">Judul Product</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="title"  class="form-control" value="@if($id>0){{ $get['title']}} @endif"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-sm-3 control-label1">Harga</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="price"  class="form-control" value="@if($id>0){{ $get['price']}} @endif"/>
                                </div>
                            </div>                            
                            

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label1">Deskripsi</label>
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
    $(document).ready(function() 
          {
            $('#description').summernote({
               height: 350,            
                    minHeight: null,        
                    maxHeight: null,          
                    focus: false                 
            });
          });

     function SaveWarning(){
        var id          ="{{$id}}";
        var a           = {};
        a.title         = $('#title').val();
        a.description   = $('#description').val();
        a.icon          = $('#icon').val();
        a.price          = $('#price').val();      
        var url         = "{{route('product_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }

    function back()
    {
        location.href="{{ route('product_table') }}";
    }
   
</script>
@endsection