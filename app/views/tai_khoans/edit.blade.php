@extends('layouts.admin')

@section('main')

<div class="box span6">
      <div class="box-header">
            <h2><i class="icon-edit"></i><span>Chỉnh Sửa Tài Khoản</span></h2>
      </div>
      <div class="box-content">
            {{ Form::model($tai_khoan, array('method' => 'PATCH', 'route' => array('tai_khoans.update', $tai_khoan->id))) }}

            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
 
            {{ Form::label('PhanQuyen_Id', 'PhanQuyen_Id:') }}
            {{ Form::input('number', 'PhanQuyen_Id') }}

            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('tai_khoans.show', 'Cancel', $tai_khoan->id, array('class' => 'btn')) }}

{{ Form::close() }}

@if ($errors->any())
      <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
      </ul>
@endif
      </div>
</div>



@stop
