@extends('layouts.scaffold')

@section('main')

{{ Form::open(array('route' => 'ad','class'=>'form-horizontal','id'=>'ad')) }}

<div class="form-group">
    <label class="control-label">Mã số:</label>
    <div class="controls row">
        <div class="input-group col-sm-4">
            <span class="input-group-addon"><i class="icon-edit"></i></span>
            {{ Form::text('username',$user['username'],array('class'=> 'form-control')) }}
        </div>  
    </div>
</div>
<div class="form-group" hidden>
    <label class="control-label">Password:</label>
    <div class="controls row">
        <div class="input-group col-sm-4">
            <span class="input-group-addon"><i class="icon-edit"></i></span>
            {{ Form::text('password',$user['password'],array('class'=> 'form-control')) }}
        </div>  
    </div>
</div>
<div class="form-group">
    <label class="control-label">Là Người Dùng:</label>
    <div class="controls row">
        <div class="input-group col-sm-4">
            <span class="input-group-addon"><i class="icon-star"></i></span>
            <select name='doi_tuong' class="form-control" required="required">
                <option value="null">-- Chọn -- </option>
                <option value="Sinh Viên">Sinh Viên</option>
                <option value="Cán Bộ">Cán Bộ</option>
            </select>
        </div>  
    </div>
</div>
<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {{ Form::submit('Xác Nhận', array('class' => 'btn btn-info')) }}
        </div>
    </div>



{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
 
@stop
