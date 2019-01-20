@extends('layouts.admin_tmp')

@section('content')
<div class="row">

   <div class="container white-container">

    <!-- Head title -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="head-title"><span class="glyphicon glyphicon-play"></span> Edit   Users</h3>
        </div>

        <div class="col-md-6">
            <a href="{{url('users')}}" class="pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Kembali </a>
        </div>
    </div>

    <hr class="hr-head-title">    
    <form action="{{ route('users.update',$users['id']) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT')}}

    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="nama" class="col-md-4 control-label required">Name</label>
        <div class="col-md-4">
            <input type="text" name="name" value="{{ $users['name'] }}" class="form-control" id="name" autofocus="autofocus"/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label required">email</label>
        <div class="col-md-4">
            <input type="text" name="email" value="{{ $users['email'] }}" class="form-control" id="email" autofocus="autofocus"/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="phone" class="col-md-4 control-label required">Phone</label>
        <div class="col-md-4">
            <input type="text" name="phone" value="{{ $users['phone'] }}" class="form-control" id="phone" autofocus="autofocus"/>
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>

    

     <div class="form-group">
        <label for="level" class="col-md-4 control-label required">Level Users</label>
        <div class="col-md-4">
            <select class="form-control" name="level">
                <option value="{{$users['level']}}">{{$users['level']}}</option>
                @foreach ($level_users as $row)
                <option value="{{$row->level}}">{{$row->level}}</option>
                @endforeach
            </select>
        </div>
    </div>  

    
    <!-- Submit button -->
    <div class="row">
        <div class="col-md-12">
            <div class="save-cancel well text-right">
               
                <button type="submit" class="btn btn-success submit-btn btn-md">
                    {{_('edit')}}
                    
                </button>
                &nbsp;
                <a href="{{url('users')}}" class="btn">Batal</a>
                    
            </div>              
        </div>
    </div>

    </form>

</div>
</div>

@endsection