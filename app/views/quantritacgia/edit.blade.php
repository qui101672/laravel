@extends('layouts.admin')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Sửa Tác Giả</h2>

    </div>
    <div class="box-content">
        {{ Form::model($tac_gia, array('method' => 'PATCH', 'route' => array('tac_gias.update', $tac_gia->id))) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label"><h2>Mã Tác Giả:</h2></label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_tac_gia',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label"><h2>Họ Tên Tác Giả:</h2></label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ho_ten',null,array('class'=> 'form-control')) }}
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
            {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
            {{ link_to_route('tac_gias.show', 'Huỷ', $tac_gia->id, array('class' => 'btn')) }}

        </fieldset>
        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</div>
@stop
