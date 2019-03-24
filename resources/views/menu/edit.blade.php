@extends('layouts.admin_tmp')

@section('content')
<div class="row">

   <div class="container white-container">

    <!-- Head title -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="head-title"><span class="glyphicon glyphicon-play"></span> Edit Group Menu</h3>
        </div>

        <div class="col-md-6">
            <a href="{{url('groupmenu',)}}" class="pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Kembali </a>
        </div>
    </div>

    <hr class="hr-head-title">    
    <form action="{{ route('menu.update',$groupmenu['id']) }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT')}}

    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
        <label for="nama" class="col-md-4 control-label required">Name Menu</label>
        <div class="col-md-4">
            <input type="text" name="nama" value="{{ $groupmenu['nama'] }}" class="form-control" id="nama" autofocus="autofocus"/>
            @if ($errors->has('nama'))
                <span class="help-block">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <label for="level" class="col-md-4 control-label required">Level Users</label>
        <div class="col-md-4">
            <select class="form-control" name="level">
                <option value="{{ $groupmenu['level'] }}">{{ $groupmenu['level'] }}</option>
                @foreach ($level_users as $row)
                <option value="{{$row->level}}">{{$row->level}}</option>
                @endforeach
            </select>
        </div>
    </div>

     <div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }}">
        <label for="nama" class="col-md-4 control-label required">Icon</label>
        <div class="col-md-4">
            <input type="text" name="icon" value="{{ $groupmenu['icon'] }}" class="form-control" id="icon" autofocus="autofocus"/>
            @if ($errors->has('icon'))
                <span class="help-block">
                    <strong>{{ $errors->first('icon') }}</strong>
                </span>
            @endif
        </div>
    </div>  

    
    <!-- Submit button -->
    <div class="row">
        <div class="col-md-12">
            <div class="save-cancel well text-right">
                <input type="submit" value="Submit" class="btn btn-success submit-btn btn-md"/>
                &nbsp;
                <a href="{{url('groupmenu')}}" class="btn">Batal</a>
            </div>              
        </div>
    </div>

    </form>

</div>
</div>
@endsection