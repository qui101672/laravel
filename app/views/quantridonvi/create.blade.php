@extends('layouts.admin')
@section('main')
<div class="box">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Tạo Đơn Vị</span>
        </h2>
    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'don_vi.store','class'=>'form-horizontal')) }}
        <fieldset class="col-sm-12">

            <div class="form-group">
                <label class="control-label">Mã Đơn Vị:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_don_vi',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Tên Đơn Vị:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_don_vi',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Ghi Chú:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>


            <div class="form-actions">
                {{ Form::submit('Tạo Đơn Vị', array('class' => 'btn btn-info')) }}
            </div>
            @if ($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
            @endif       
        </fieldset>           
        {{ Form::close() }}

    </div>
</div>

@stop


