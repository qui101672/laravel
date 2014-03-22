@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="box">
      <div class="box-header">
            <h2><i class="icon-edit"></i><span>Chỉnh Sửa Vòng Thi</span></h2>
      </div>
      <div class="box-content">
 
{{ Form::model($vong_thi,array('class' => 'form-horizontal'), array('method' => 'PATCH', 'route' => array('vong_this.update', $vong_thi->id))) }}
           <legend class="col-sm-12"> 
            <div class="form-group">
                    <label class="control-label"><h2>Mã Vòng Thi:</h2></label>
                    <div class="controls row">
                      <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_vong_thi',null,array('class'=> 'form-control','readonly'=>'true')) }}
                      </div>  
                    </div>
              </div>
            <div class="form-group">
                    <label class="control-label"><h2>Tên Vòng Thi:</h2></label>
                    <div class="controls row">
                      <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_vong_thi',null,array('class'=> 'form-control')) }}
                      </div>  
                    </div>
              </div>
                 <div class="form-group">
                    <label class="control-label"><h2>ID Hình Thức Dự Thi:</h2></label>
                    <div class="controls row">
                      <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('HinhThucDuThis_Id',null,array('class'=> 'form-control')) }}
                      </div>  
                    </div>
              </div>
                 <div class="form-group">
                    <label class="control-label"><h2>Ghi Chú:</h2></label>
                    <div class="controls row">
                      <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                      </div>  
                    </div>
              </div>
 
  
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('vong_this.show', 'Cancel', $vong_thi->id, array('class' => 'btn')) }}
 
{{ Form::close() }}
    </legend>
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>
</div>
@stop
