@extends('layouts.scaffold')

@section('main')

<h1>Create Hinh_thuc_du_thi</h1>

{{ Form::open(array('route' => 'hinh_thuc_du_this.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_hinh_thuc', 'Ma_hinh_thuc:') }}
            {{ Form::text('ma_hinh_thuc') }}
        </li>

        <li>
            {{ Form::label('ten_hinh_thuc', 'Ten_hinh_thuc:') }}
            {{ Form::text('ten_hinh_thuc') }}
        </li>

        <li>
            {{ Form::label('noi_dung_hinh_thuc', 'Noi_dung_hinh_thuc:') }}
            {{ Form::text('noi_dung_hinh_thuc') }}
        </li>

        <li>
            {{ Form::label('so_luong_yeu_cau', 'So_luong_yeu_cau:') }}
            {{ Form::input('number', 'so_luong_yeu_cau') }}
        </li>

        <li>
            {{ Form::label('so_vong_thi', 'So_vong_thi:') }}
            {{ Form::input('number', 'so_vong_thi') }}
        </li>

        <li>
            {{ Form::label('HoiThis_Id', 'HoiThis_Id:') }}
            {{ Form::input('number', 'HoiThis_Id') }}
        </li>

        <li>
            {{ Form::label('HoiThis_DanhMucsId', 'HoiThis_DanhMucsId:') }}
            {{ Form::input('number', 'HoiThis_DanhMucsId') }}
        </li>

        <li>
            {{ Form::label('HoiThis_DanhMucHoiThisId', 'HoiThis_DanhMucHoiThisId:') }}
            {{ Form::input('number', 'HoiThis_DanhMucHoiThisId') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


