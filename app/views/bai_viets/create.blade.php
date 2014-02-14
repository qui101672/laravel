@extends('layouts.admin')

@section('main')

<h1>Create Bai_viet</h1>

{{ Form::open(array('route' => 'bai_viets.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_bai_viet', 'Ma_bai_viet:') }}
            {{ Form::text('ma_bai_viet') }}
        </li>

        <li>
            {{ Form::label('ten_bai_viet', 'Ten_bai_viet:') }}
            {{ Form::text('ten_bai_viet') }}
        </li>

        <li>
            {{ Form::label('noi_dung_bai_viet', 'Noi_dung_bai_viet:') }}
            {{ Form::text('noi_dung_bai_viet') }}
        </li>

        <li>
            {{ Form::label('id_nguoi_sua', 'Id_nguoi_sua:') }}
            {{ Form::input('number', 'id_nguoi_sua') }}
        </li>

        <li>
            {{ Form::label('tag', 'Tag:') }}
            {{ Form::text('tag') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

        <li>
            {{ Form::label('id_the_loai_bai_viet', 'Id_the_loai_bai_viet:') }}
            {{ Form::input('number', 'id_the_loai_bai_viet') }}
        </li>

        <li>
            {{ Form::label('id_nguoi_tao_bai_viet', 'Id_nguoi_tao_bai_viet:') }}
            {{ Form::input('number', 'id_nguoi_tao_bai_viet') }}
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


