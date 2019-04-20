@extends('layouts.admin_tmp')
@section('content')
<div class="row">
    <div class="pull-right">
        <a href="{{ route('sub_training_catagories_form')}}" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah Materi
        </a>
    </div>
     <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <div class="x_title">
              <h2>Table<small>Materi</small></h2>
            <div class="clearfix"></div>
        </div>                      
        <div class="table-responsive m-b-20">
          <table id="user" border="0" class="table table-hover1 display  table-bordered compact1" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th rowspan="2"><div style="width: 50px">No</div></th>
                    <th rowspan="2"><div style="width: 200px">Katagori Training</div></th>
                    <th colspan="2"><div style="width: 200px">Materi</div></th>
                </tr>
                <tr>
                  <th>
                    <div style="width: 300px">Materi</div>
                  </th>
                  <th>
                    <div style="width: 300px">Sub Materi</div>
                  </th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
  var url       ="{{ route('sub_training_catagories_list') }}";
  var oTable    = $('#user').DataTable({
     ajax: {
        url: url,
      },              
    scrollX: true,
        "sScrollX"                  :"100%",
        scrollCollapse              : true,
        "bCaseInsensitive"          : true,        
        "bCaseInsensitive"          : true,
        "bJQueryUI"                 : true,
        "sPaginationType"           : "full_numbers", 
        "aLengthMenu"               : [[5,10, 20, 50, 100, -1], [5,10, 20, 50, 100, "All"]], 
        "aaSorting"                 : [[1, "asc"]], 
        "bAutoWidth"                : false,
        "iDisplayLength"            : 5, 
        "bCaseInsensitive"          : true,   
        "fnRowCallback"             : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
              $('td:eq(0)', nRow).addClass( "hide" );
              $.contextMenu({
               selector     : '#user tbody tr',
               callback     : function (key, options) {
                   var pos  = $(this).parent().index();
                   var m    = "global: " + key;
               },
               items: {                 
                   "edit"   : {
                               name   : "Edit",
                               icon   : "edit",
                              callback: function (key, options) {
                              var sid = $(this).children(":eq(0)").text();
                              edit(sid); 
                       }
                   },               
                  
                   "delete": {
                               name   : "Delete",
                               icon   : "delete",
                              callback: function (key, options) {
                              var sid = $(this).children(":eq(0)").text();
                              deleted(sid);
                       }
                   },
                   "sep3": "---------",
                   "quit": { name: "Quit", icon: "quit" }
               }
           });
       }, 
               
     "columns": [
      { "data": "id"  },
      { "data": "id","width":"10%","render": function(data, type, row,meta) {return meta.row + meta.settings._iDisplayStart + 1 ;}},
      { "data": "judul" },
      { "data": "materi" },
      { "data": "sub_materi" }
      ],
    });
    
});

</script>
<script type="text/javascript">
  function edit(sid){
    location.href="{{route('user_edit')}}?id="+sid;
  }
</script>
<script type="text/javascript">
    function deleted(sid){       
      var url   = "{{route('delete') }}?id="+sid+"&table=users&refresh=user_table";
      AlertCheck('Apakah anda Yakin Menghapus Data Ini?',url);
  }
</script>

@endsection