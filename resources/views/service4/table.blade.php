@extends('layouts.admin_tmp')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Table Service 4</h4>                      
        <div class="table-responsive m-b-20">
          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
           <!--  <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                  <?php $no=1;?>
                    @foreach ($service2 as $row)
                   <tr>
                       <td>{{$no}}</td>
                       <td>{{$row->title}}</td>    
                       <td><?php echo strip_tags(str_limit($row->description,250))?></td>                     
                       <td style="text-align:right;">
                            <a href="javascript:edit({{$row->id}})" class="btn btn-info btn-sm" style="float: left;">
                                <i class="fa fa-edit"></i>
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
    location.href="{{route('service4_edit')}}?id="+sid;
  }
</script>

@endsection