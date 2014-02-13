@extends('layouts.scaffold')

@section('main')

<h1>Edit Bai_viet</h1>
{{ Form::model($bai_viet, array('method' => 'PATCH', 'route' => array('bai_viets.update', $bai_viet->id))) }}
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
            {{ Form::label('id_ma_the_loai_bv', 'Id_ma_the_loai_bv:') }}
            {{ Form::input('number', 'id_ma_the_loai_bv') }}
        </li>

        <li>
            {{ Form::label('id_nguoi_tao', 'Id_nguoi_tao:') }}
            {{ Form::input('number', 'id_nguoi_tao') }}
        </li>

        <li>
            {{ Form::label('tag', 'Tag:') }}
            {{ Form::text('tag') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::textarea('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('bai_viets.show', 'Cancel', $bai_viet->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
