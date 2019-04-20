@extends('layouts.admin_tmp')
@section('content')
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;"  >
    <a href="#" onclick="SaveWarning()"  class="btn-floating btn-large" style="background-color: #4CAF50;color: #fff">
        <i style="font-size: 1.6em" class="fa fa-save fa-lg"></i>
    </a>
</div>
<div class="row">
    <div class="pull-right">
        <a href="{{ route('service3_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Service 3
        </a>
    </div>
     <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
        <div class="x_title">
              <h2>Table<small>Service 2</small></h2>
            <div class="clearfix"></div>
        </div>                       
        <div class="table-responsive m-b-20">
          <table id="" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi Deskripsi</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <form method="post" action="#">
                      <td><input  class="form-control" type="text" id="title" value="{{$desc1['title']}}"></td>
                      <td><textarea id="desc" class="form-control">{{$desc1['desc']}}</textarea></td>
                    </form>
                  </tr>          
                </tbody>
            </table>

        </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
              <h2>Table<small>Service 3</small></h2>
            <div class="clearfix"></div>
        </div>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Icon</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                  <?php $no=1;?>
                    @foreach ($service1 as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->icon}}</td>
                       <td>{{$row->title}}</td>    
                       <td><?php echo strip_tags(str_limit($row->description,250))?></td>                     
                       <td style="text-align:right;">
                            <a href="javascript:edit({{$row->id}})" class="btn btn-info btn-sm" style="float: left;">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:deleted({{$row->id}})" class="btn btn-info btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                   </tr>
                   <?php $no++;?>

                   @endforeach

                </tbody>
            </table>

        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function edit(sid){
    location.href="{{route('service3_edit')}}?id="+sid;
  }
</script>
<script type="text/javascript">
    function deleted(sid){       
      var url   = "{{route('delete') }}?id="+sid+"&table=t_desc&refresh=service3_table";
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>
<script type="text/javascript">
   function SaveWarning(){
        var a   = {};
        a.title = $('#title').val();
        a.desc  = $('#desc').val();
        var url = "{{route('update_service_h3') }}?data="+'['+JSON.stringify(a)+']';
        AlertCheck('Apakah anda Yakin Mengupdate Data Ini?',url);
    }
</script>



@endsection