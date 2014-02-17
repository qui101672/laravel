@extends('layouts.admin')

@section('main')

<div class="box span12">
        <div class="box-header">
            <h2><i class="icon-edit"></i>Tạo Bài Viết</h2>
        </div>
        <div class="box-content">
            {{ Form::open(array('route' => 'bai_viets.store')) }}
 
                {{ Form::label('id', 'Id:') }}
                {{ Form::input('number', 'id') }}
     
                {{ Form::label('ma_bai_viet', 'Mã Bài Viết:') }}
                {{ Form::text('ma_bai_viet') }}
     
                {{ Form::label('tieu_de_bai_viet', 'Tiêu Đề:') }}
                {{ Form::text('tieu_de_bai_viet') }}
     
                {{ Form::label('noi_dung_bai_viet', 'Nội Dung:') }}
                {{ Form::textarea('noi_dung_bai_viet') }}
     
                {{ Form::label('TheLoaiBaiViets_Id', 'Thể Loại:') }}
                {{ Form::input('number', 'TheLoaiBaiViets_Id') }}
      
                {{ Form::label('TaiKhoans_Id', 'Người Tạo:') }}
                {{ Form::input('number', 'TaiKhoans_Id') }}
     
                {{ Form::label('id_nguoi_sua', 'Người Sửa:') }}
                {{ Form::input('number', 'id_nguoi_sua') }}
     
                {{ Form::label('tag', 'Tag:') }}
     
                {{ Form::label('ghi_chu', 'Ghi Chú:') }}
                {{ Form::text('ghi_chu') }}
     
    			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
 
            {{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
        </div>
    </div><!--/span-->
@stop


