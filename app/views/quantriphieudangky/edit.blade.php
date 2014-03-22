@extends('layouts.scaffold')

@section('main')

<h1>Edit Phieu_dang_ky</h1>
{{ Form::model($phieu_dang_ky, array('method' => 'PATCH', 'route' => array('phieu_dang_kies.update', $phieu_dang_ky->id))) }}
	<ul>
        <li>
            {{ Form::label('ma_phieu_dang_ky', 'Ma_phieu_dang_ky:') }}
            {{ Form::text('ma_phieu_dang_ky') }}
        </li>

        <li>
            {{ Form::label('trang_thai', 'Trang_thai:') }}
            {{ Form::text('trang_thai') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

        <li>
            {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
            {{ Form::input('number', 'TaiKhoans_Id') }}
        </li>

        <li>
            {{ Form::label('HoiThis_Id', 'HoiThis_Id:') }}
            {{ Form::input('number', 'HoiThis_Id') }}
        </li>

        <li>
            {{ Form::label('HoiThis_DanhMucNamsId', 'HoiThis_DanhMucNamsId:') }}
            {{ Form::input('number', 'HoiThis_DanhMucNamsId') }}
        </li>

        <li>
            {{ Form::label('HoiThis_DanhMucHoiThisId', 'HoiThis_DanhMucHoiThisId:') }}
            {{ Form::input('number', 'HoiThis_DanhMucHoiThisId') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('phieu_dang_kies.show', 'Cancel', $phieu_dang_ky->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
