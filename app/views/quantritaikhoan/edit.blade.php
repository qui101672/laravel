@extends('layouts.admin')

@section('main')

<div class="box span6">
      <div class="box-header">
            <h2><i class="icon-edit"></i><span>Chỉnh Sửa Tài Khoản</span></h2>
      </div>
      <div class="box-content">
            {{ Form::model($tai_khoan,array('class' => 'form-horizontal'), array('method' => 'PATCH', 'route' => array('tai_khoan.update', $tai_khoan->id))) }}
            <div class="control-group">
                    {{ Form::label('username', 'Username:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('username',null,array('class'=> 'help-inline','readonly'=>'true')) }}
                  </div>
                </div>
            
            <div class="control-group">
                    {{ Form::label('PhanQuyen_Id', 'Quyền:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('PhanQuyen_Id',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>    

            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('tai_khoan.show', 'Cancel', $tai_khoan->id, array('class' => 'btn')) }}

{{ Form::close() }}

@if ($errors->any())
      <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
      </ul>
@endif
      </div>
</div>



@stop
