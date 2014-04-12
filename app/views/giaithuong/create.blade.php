@extends('layouts.scaffold')

@section('main')

<h1>Create Giai_thuong</h1>

{{ Form::open(array('route' => 'giai_thuongs.store')) }}
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


