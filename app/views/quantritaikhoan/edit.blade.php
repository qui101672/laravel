@extends('layouts.admin')

@section('main')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <div class="box">
      <div class="box-header">
            <h2><i class="icon-edit"></i><span>Chỉnh Sửa Tài Khoản</span></h2>
      </div>
      <div class="box-content">
            {{ Form::model($tai_khoan,array('class' => 'form-horizontal'), array('method' => 'PATCH', 'route' => array('tai_khoan.update', $tai_khoan->id))) }}
            <legend class="col-sm-12">
             
            <div class="form-group">
                    <label class="control-label"><h2>Username:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-10">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('username',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
              </div>
              
              <div class="form-group">
                    <label class="control-label"><h2>ID Quyền:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-10">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('PhanQuyen_Id',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
              </div>
                

            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('tai_khoan.show', 'Cancel', $tai_khoan->id, array('class' => 'btn')) }}
            </legend>
          {{ Form::close() }}

@if ($errors->any())
      <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
      </ul>
@endif

      </div>
</div> 
</div>




@stop
