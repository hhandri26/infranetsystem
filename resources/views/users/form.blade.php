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
            <div class="col-md-10"><h4 class="box-title">Form Tambah Users @if($id>0) Edit Users @endif</h4></div>
        </div>
    </div>
    <div class="box-body">
        <form class="form-horizontal">
            <div class="box-body1">
                <div class="panel panel-info">
                    <div class="panel-heading1"></div>     
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label1">Nama User</label>
                                <div class="col-sm-9">
                                    <input  type="text" id="name"  class="form-control" value="@if($id>0){{ $get['name']}} @endif"/>
                                </div>
                            </div>                         

                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label1">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" id="email" value="@if($id>0){{ $get['email']}} @endif" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label1">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" id="password" class="form-control" value="@if($id>0){{ $get['real_password']}} @endif"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label1">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" id="phone" value="@if($id>0){{ $get['phone']}} @endif" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="active" class="col-sm-3 control-label1">Aktif?</label>                                
                                <div class="col-sm-9">
                                    <input type="radio" class="rcheck"  name="active" id="active" name="active" value="1" @if($id>0 && $get['active']=='1') {{ "checked" }} @endif>Active
                                    <input type="radio" class="rcheck"  name="active" id="active" name="active" value="2" @if($id>0 && $get['active']=='2') {{ "checked" }} @endif>Tidak Active
                                </div>                                                               
                            </div>

                            <div class="form-group">
                                <label for="select_menu" class="col-sm-3 control-label1">Privileges</label>
                                <div class="col-sm-9">
                                    <input type="hidden" id="select_menu" class="form-control"/>
                                </div>
                            </div>
                            @if($id>0)
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label1">Table Privileges</label>
                                <div class="col-sm-9">
                                    <table class="table table-hover table-condensed table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama Menu</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($get['row_prv'] as $row)
                                            <tr>
                                                <td>{{$row->menu_name}}</td>
                                                 <td style="text-align:left;">
                                                    <a href="javascript:deleted({{$row->id}})" class="btn btn-info btn-danger btn-sm">
                                                        <i class="fa fa-minus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif

                            
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('public/plugins/select2-3.5.4/select2.min.js')}}"></script>
<script src="{{asset('public/plugins/select2-3.5.4/select2_locale_id.js')}}"></script>
<script type="text/javascript">

$('#select_menu').select2({
    multiple                : true,
    allowClear              : true,
    placeholder             : "Ketik Nama Menu",
    ajax                    : {
                                url      : '{{route('select_menu')}}',
                                dataType : 'json',
                                data     : function (term, page) {return { q: term }; },
                                results  : function (data, page) {return { results: data }; }
                            }
});

$('.rcheck').iCheck({
checkboxClass: 'icheckbox_flat-green',
radioClass: 'iradio_square-green',
increaseArea: '20%' // optional
  });
    function SaveWarning(){
        var id              ="{{$id}}";
        var a               = {};
        a.name              = $('#name').val();
        a.email             = $('#email').val();
        a.password          = $('#password').val();
        a.phone             = $('#phone').val();
        var r3              = $("input[name='active']:checked").val();
        a.active            = r3;
        a.select_menu       = $('#select_menu').val();
        var url             = "{{route('user_add') }}?id="+id+"&data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Menyimpan Data Ini?',url);
    }

    function back()
    {
        location.href="{{ route('user_table') }}";
    }
   
</script>
<script type="text/javascript">
    function deleted(sid){       
    var url   = "{{route('delete_prv') }}?id="+sid;
    swal({
            title: 'Apakah Anda Yakin',
            text: 'Akan Menghapus Data Ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Save!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger m-l-10',
            buttonsStyling: false
        }).then(function () {
            deleted_prv(url);
        },function (dismiss) {
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    
  }

  function deleted_prv(url){

    var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: url,
            type: 'POST',
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (R) {
                if (R.msg_type=='success'){
                    Alert(R.msg_type,R.msg);
                    window.location.href ="{{route('user_edit')}}?id={{$id}}";
                }else{
                    Alert(R.msg_type,R.msg);
                }

            }

        });
  }
</script>
@endsection