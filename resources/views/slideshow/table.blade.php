@extends('layouts.admin_tmp')

@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('slideshow_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Slideshow
        </a>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
              <h2>Table<small>Slideshow</small></h2>
            <div class="clearfix"></div>
        </div>                       
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Img</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th>Link</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                  <?php $no=1;?>
                    @foreach ($data as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td><img src="{{asset('/storage/app/file/slideshow/'.$row->img)}}" class="img-responsive" alt="" style="width: 200px" ></td>
                       <td>{{$row->title}}</td>    
                       <td><?php echo strip_tags(str_limit($row->description,250))?></td>
                       <td>{{$row->link_name}}</td>
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
</div>
<script type="text/javascript">
  function edit(sid){
    location.href="{{route('slideshow_edit')}}?id="+sid;
  }
</script>
<script type="text/javascript">
    function deleted(sid){
      var table   ='t_slideshow';
      var refresh = 'slideshow_table';      
      var url     = "{{route('delete') }}?id="+sid+"&table="+table+"&refresh="+refresh;
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>



@endsection