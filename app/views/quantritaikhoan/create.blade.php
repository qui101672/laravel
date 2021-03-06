@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-user"> </i>Tạo Tài Khoản</h2>
            </div>
            <div class="box-content">
                {{ Form::open(array('route' => 'tai_khoans.store')) }}

                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username') }}

                {{ Form::label('password', 'Password:') }}
                {{ Form::text('password') }}
                {{ Form::label('PhanQuyen_Id', 'PhanQuyen_Id:') }}
                {{ Form::input('number', 'PhanQuyen_Id') }}

                {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}

                {{ Form::close() }}

                @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>

@stop


