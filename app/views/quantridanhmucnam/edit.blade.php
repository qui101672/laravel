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
                    {{ Form::model($danh_muc_nam, array('method' => 'PATCH', 'route' => array('danh_muc_nams.update', $danh_muc_nam->id))) }}
                    
                    <div class="form-group">
                        <label class="control-label">Năm:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('nam',null,array('class'=> 'form-control')) }}
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
                        {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
                        {{ link_to_route('danh_muc_nams.show', 'Huỷ', $danh_muc_nam->id, array('class' => 'btn')) }}
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



