@extends('layouts.admin')

@section('main')

<div class="box span12">
        <div class="box-header">
            <h2><i class="icon-edit"></i>Tạo Bài Viết</h2>
        </div>
        <div class="box-content">
            {{ Form::open(array('route' => 'bai_viet.store','class'=>'form-horizontal')) }}
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
                    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
                </div>   
    			
        </fieldset>
            {{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
        </div>
    </div><!--/span-->
@stop


