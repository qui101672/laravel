@extends('layouts.scaffold')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-user"></i><span>Chỉnh Sửa Thông Tin Sinh Viên</span></h2>
    </div>
    <div class="box-content">
{{ Form::model($sinh_vien, array('method' => 'PATCH', 'route' => array('sinh_viens.update', $sinh_vien->id))) }}
            <div>
        {{ Form::label('mssv', 'Mssv:') }}
        {{ Form::text('mssv') }}
    </div>

    <div>
        {{ Form::label('ho_ten', 'Ho ten:') }}
        {{ Form::text('ho_ten') }}
    </div>

    <div>
        {{ Form::label('ngay_sinh', 'Ngay sinh:') }}
        {{ Form::text('ngay_sinh') }}
    </div>

    <div>
        {{ Form::label('gioi_tinh', 'Gioi tinh:') }}
        {{ Form::text('gioi_tinh') }}
    </div>

    <div>
        {{ Form::label('dia_chi', 'Dia chi:') }}
        {{ Form::text('dia_chi') }}
    </div>

    <div>
        {{ Form::label('que_quan', 'Que quan:') }}
        {{ Form::text('que_quan') }}
    </div>

    <div>
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email') }}
    </div>

    <div>
        {{ Form::label('sdt', 'Sdt:') }}
        {{ Form::text('sdt') }}
    </div>

    <div>
        {{ Form::label('ghi_chu', 'Ghi chu:') }}
        {{ Form::text('ghi_chu') }}
    </div>
 
            {{ Form::label('Lops_Id', 'Lops_Id:') }}
            {{ Form::input('number', 'Lops_Id') }}
   
            {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
            {{ Form::input('number', 'TaiKhoans_Id') }}

			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('sinh_viens.show', 'Cancel', $sinh_vien->id, array('class' => 'btn')) }}

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>
@stop


 

    

 