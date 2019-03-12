@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('users.create')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah User
        </a>
    </div>
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Data Users</h4>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>IP Address</th>
                    <th>Phone</th>
                    <th>Active</th>
                    <th style="width: 50px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1;?>
                    @foreach ($user as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->email}}</td>
                       <td>{{$row->ip_address}}</td>
                       <td>{{$row->phone}}</td>
                       <td>{{$row->active}}</td>
                       <td style="text-align:right;">
                            <a href="{{route('users.edit',$row->id)}}" class="btn btn-info btn-sm" style="float: left;">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form method="post" action="{{route('users.destroy',$row->id)}}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
                              
                              <button type="submit" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Yakin Hapus Data In?')"><i class="fa fa-trash"></i></button>
                            </form>

                           
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