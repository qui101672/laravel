@extends('layouts.scaffold')

@section('main')

<form action="" method="POST" class="form-horizontal" role="form">
    <div class="form-group">
        <legend>Đăng Nhập</legend>
    </div>
    {{ Form::label('username', 'Mã Số Sinh Viên/ Cán Bộ') }} 
    {{ Form::text('username', Input::old('username')) }}
    {{ Form::label('password', 'Mật Khẩu') }} 
    {{ Form::password('password') }}
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </div>
    </div>
</form>
<!-- check for login error flash var -->
@if (Session::has('flash_error'))
<div id="flash_error">{{ Session::get('flash_error') }}</div>
@endif

@stop