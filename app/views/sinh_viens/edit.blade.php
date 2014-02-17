@extends('layouts.scaffold')

@section('main')

<h1>Edit Sinh_vien</h1>
{{ Form::model($sinh_vien, array('method' => 'PATCH', 'route' => array('sinh_viens.update', $sinh_vien->id))) }}
	<ul>
        <li>
            {{ Form::label('mssv', 'Mssv:') }}
            {{ Form::text('mssv') }}
        </li>

        <li>
            {{ Form::label('ho_ten', 'Ho_ten:') }}
            {{ Form::text('ho_ten') }}
        </li>

        <li>
            {{ Form::label('gioi_tinh', 'Gioi_tinh:') }}
            {{ Form::text('gioi_tinh') }}
        </li>

        <li>
            {{ Form::label('ngay_sinh', 'Ngay_sinh:') }}
            {{ Form::text('ngay_sinh') }}
        </li>

        <li>
            {{ Form::label('dia_chi', 'Dia_chi:') }}
            {{ Form::text('dia_chi') }}
        </li>

        <li>
            {{ Form::label('que_quan', 'Que_quan:') }}
            {{ Form::text('que_quan') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('sdt', 'Sdt:') }}
            {{ Form::text('sdt') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

        <li>
            {{ Form::label('Lops_Id', 'Lops_Id:') }}
            {{ Form::input('number', 'Lops_Id') }}
        </li>

        <li>
            {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
            {{ Form::input('number', 'TaiKhoans_Id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('sinh_viens.show', 'Cancel', $sinh_vien->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
