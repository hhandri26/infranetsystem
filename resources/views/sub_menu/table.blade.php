@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('sub_menu_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Sub Menu
        </a>
    </div>
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Sub Menu</h4>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Nama Sub Menu</th>
                    <th>Url</th>
                    <th style="width: 50px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1;?>
                    @foreach ($get as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->submenu}}</td>
                       <td>{{$row->menu}}</td>    
                       <td>{{$row->url}}</td>                       
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
<script type="text/javascript">
  function edit(sid){
    location.href="{{route('sub_menu_edit')}}?id="+sid;
  }
</script>
<script type="text/javascript">
    function deleted(sid){       
      var url   = "{{route('delete') }}?id="+sid+"&table=t_sub_menu&refresh=sub_menu_table";
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>



@endsection