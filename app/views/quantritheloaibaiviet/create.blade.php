@extends('layouts.admin')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"> </i>Tạo Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'the_loai_bai_viet.store','class'=>'form-horizontal')) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label">Mã Thể Loại Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_the_loai_bai_viet',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" >Thể Loại Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_the_loai_bai_viet',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" >Ghi Chú:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
        </fieldset>
        {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}

        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</div>




@stop


