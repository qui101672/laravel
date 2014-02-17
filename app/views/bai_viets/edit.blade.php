@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Bài Viết</h2>
    </div>
    <div class="box-content">
        {{ Form::model($bai_viet, array('method' => 'PATCH', 'route' => array('bai_viets.update', $bai_viet->id))) }}
             
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
                {{ Form::label('created_at', 'Thời Gian Tạo:') }}
                <input type="text" class="input-xlarge datepicker" id="created_at"/>
                {{ Form::label('updated_at', 'Thời Gian Sửa:') }}
                <input type="text" class="input-xlarge datepicker" id="updated_at"/>
                {{ Form::label('tag', 'Tag:') }}
        
                {{ Form::label('ghi_chu', 'Ghi Chú:') }}
                {{ Form::text('ghi_chu') }}
    
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('bai_viets.show', 'Cancel', $bai_viet->id, array('class' => 'btn')) }}
 
            {{ Form::close() }}
            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif
    </div>
</div>


 
@stop
