@extends('layouts.scaffold')

@section('main')

<h1>Edit Giai_thuong</h1>
{{ Form::model($giai_thuong, array('method' => 'PATCH', 'route' => array('giai_thuongs.update', $giai_thuong->id))) }}
	<ul>
        <li>
            {{ Form::label('ma_giai_thuong', 'Ma_giai_thuong:') }}
            {{ Form::text('ma_giai_thuong') }}
        </li>

        <li>
            {{ Form::label('ten_gai_thuong', 'Ten_gai_thuong:') }}
            {{ Form::text('ten_gai_thuong') }}
        </li>

        <li>
            {{ Form::label('so_luong', 'So_luong:') }}
            {{ Form::input('number', 'so_luong') }}
        </li>

        <li>
            {{ Form::label('so_tien', 'So_tien:') }}
            {{ Form::text('so_tien') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

        <li>
            {{ Form::label('HinhThucDuThis_Id', 'HinhThucDuThis_Id:') }}
            {{ Form::input('number', 'HinhThucDuThis_Id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('giai_thuongs.show', 'Cancel', $giai_thuong->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
