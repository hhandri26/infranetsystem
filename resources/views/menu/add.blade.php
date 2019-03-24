@extends('layouts.admin_tmp')

@section('content')
<div class="row">

   <div class="container white-container">

    <!-- Head title -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="head-title"><span class="glyphicon glyphicon-play"></span> Tambah Group Menu</h3>
        </div>

        <div class="col-md-6">
            <a href="{{url('menu_table')}}" class="pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Kembali </a>
        </div>
    </div>

    <hr class="hr-head-title">    
    <form class="form-horizontal">
        

    <div class="form-group">
        <label for="nama" class="col-md-4 control-label required">Name Menu</label>
        <div class="col-md-4">
            <input type="text" name="nama" class="form-control" id="nama" autofocus="autofocus"/>
           
        </div>
    </div>

    <div class="form-group">
        <label for="nama" class="col-md-4 control-label required">Icon</label>
        <div class="col-md-4">
            <select class="form-control select2" name="icon" id="icon">
                @foreach ($icon as $row)
                <option value="">{{$row->value}}<i class="{{$row->value}}"></i></option>
                @endforeach
            </select>
            
           
        </div>
    </div> 
 

    
    <!-- Submit button -->
    <div class="row">
        <div class="col-md-12">
            <div class="save-cancel well text-right">
                <input type="submit" value="Submit" class="btn btn-success submit-btn btn-md"/>
                &nbsp;
                <a href="{{url('menu_table')}}" class="btn">Batal</a>
            </div>              
        </div>
    </div>

    </form>

</div>
</div>
@endsection