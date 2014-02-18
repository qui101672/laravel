@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Bài Viết</h2>
    </div>
    <div class="box-content">
        {{ Form::model($bai_viet, array('method' => 'PATCH','class'=>'form-horizontal', 'route' => array('bai_viet.update', $bai_viet->id))) }}
                <fieldset>
                <div class="control-group">
                    {{ Form::label('the_loai_bai_viet', 'Thể Loại Bài Viết',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('the_loai_bai_viet',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>
                <div class="control-group">
                    {{ Form::label('ma_bai_viet', 'Mã Bài Viết:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('ma_bai_viet',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>
               
                <div class="control-group">
                    {{ Form::label('tieu_de_bai_viet', 'Tiêu Đề:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('tieu_de_bai_viet',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>
                <div class="control-group">
                    {{ Form::label('noi_dung_bai_viet', 'Nội Dung Bài Viết:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::textarea('noi_dung_bai_viet',null,array('class'=> 'cleditor')) }}
                  </div>
                </div>
                <div class="control-group">
                    {{ Form::label('tieu_de_bai_viet', 'Tiêu Đề:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('tieu_de_bai_viet',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>
                <div class="control-group">
                    {{ Form::label('ghi_chu', 'Ghi Chú:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('ghi_chu',null,array('class'=> 'help-inline')) }}
                  </div>
                </div>
                <div class="control-group">
                    {{ Form::label('tag', 'Tag:',array('class'=>'control-label')) }}
                  <div class="controls">
                    {{ Form::text('tag',null,array('class'=> 'help-inline')) }}
                  </div>
                </div> 
                <div class="form-actions">
                    {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                     {{ link_to_route('bai_viet.index', 'Cancel', array(), array('class' => 'btn')) }}
                </div>   
                
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
