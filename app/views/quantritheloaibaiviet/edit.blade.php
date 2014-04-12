@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Sửa Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">
        {{ Form::model($the_loai_bai_viet, array('method' => 'PATCH', 'route' => array('the_loai_bai_viet.update', $the_loai_bai_viet->id))) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label" for="date01">Mã Thể Loại Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_the_loai_bai_viet',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="date01">Thể Loại Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_the_loai_bai_viet',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="date01">Ghi Chú:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>

            {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
            {{ link_to_route('the_loai_bai_viet.show', 'Huỷ', $the_loai_bai_viet->id, array('class' => 'btn')) }}
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
