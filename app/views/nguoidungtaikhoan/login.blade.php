@extends('layouts.scaffold')

@section('main')
 
<form action="" method="POST" class="" role="form" style="padding: 14px 66% 10px 40px;">
    <div class="form-group">
        <legend>Đăng Nhập</legend>
    </div>

    {{ Form::label('username', 'Mã Số Sinh Viên/ Cán Bộ') }} 
    {{ Form::text('username', Input::old('username')) }}
    {{ Form::label('password', 'Mật Khẩu') }} 
    {{ Form::password('password') }}
    <br> 
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-info">Đăng Nhập</button>
        </div>
    </div>
</form>
<!-- check for login error flash var -->
@if (Session::has('flash_error'))
<div id="flash_error">{{ Session::get('flash_error') }}</div> 

@endif

@stop