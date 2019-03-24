@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('menu_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Group Menu
        </a>
    </div>
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Group Menu</h4>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Icon</th>
                    <th style="width: 50px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1;?>
                    @foreach ($groupmenu as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->menu_name}}</td>
                       <td><i class="{{$row->icon}}"></i></td>                       
                       <td style="text-align:right;">
                            <a href="javascript:edit($row->id)" class="btn btn-info btn-sm" style="float: left;">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="javascript:delete($row->id)">
                              <i class="fa fa-trash"></i>
                            </button>
                        </td>
                   </tr>
                   <?php $no++;?>

                   @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>



@endsection