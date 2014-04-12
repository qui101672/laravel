@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Chỉnh Sửa Danh Mục Năm</h2>
            </div>
            <div class="box-content">
                <fieldset class="col-sm-12">
                    {{ Form::open(array('route' => 'danh_muc_nams.store'),array('class' => 'form-horizontal')) }}
                    <div class="form-group">
                        <label class="control-label">Năm:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('nam',null,array('class'=> 'form-control','required')) }}
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
                    <div class="form-action">
                       {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}
                    </div>
                    {{ Form::close() }}
                </fieldset>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop



