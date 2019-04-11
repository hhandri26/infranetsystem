@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('artikel_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Artikel
        </a>
    </div>
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Table Article</h4>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Img</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th>Tgl Update</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                  <?php $no=1;?>
                    @foreach ($data as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td><img src="{{asset('/storage/app/file/article/'.$row->img)}}" class="img-responsive" alt="" style="width: 200px" ></td>
                       <td>{{$row->title}}</td>    
                       <td><?php echo strip_tags(str_limit($row->decription,250))?></td>
                       <td>{{$row->date}}</td>
                       <td>{{$row->sort}}</td>                       
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
    location.href="{{route('artikel_edit')}}?id="+sid;
  }
</script>
<script type="text/javascript">
    function deleted(sid){       
      var url   = "{{route('delete') }}?id="+sid+"&table=t_article&refresh=artikel_table";
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>



@endsection