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
            {{ Form::label('trang_thai_phieu', 'Trang_thai_phieu:') }}
            {{ Form::checkbox('trang_thai_phieu') }}
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
            {{ Form::label('HoiThis_Is', 'HoiThis_Is:') }}
            {{ Form::input('number', 'HoiThis_Is') }}
        </li>

        <li>
            {{ Form::label('Hoi_DanhMucNamsId', 'Hoi_DanhMucNamsId:') }}
            {{ Form::input('number', 'Hoi_DanhMucNamsId') }}
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
