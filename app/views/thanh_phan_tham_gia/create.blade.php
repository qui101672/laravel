@extends('layouts.scaffold')

@section('main')

<h1>Create Thanh_phan_tham_gium</h1>

{{ Form::open(array('route' => 'thanh_phan_tham_gia.store')) }}
	<ul>
        <li>
            {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
            {{ Form::input('number', 'TaiKhoans_Id') }}
        </li>

        <li>
            {{ Form::label('TietMucDuThis_Id', 'TietMucDuThis_Id:') }}
            {{ Form::input('number', 'TietMucDuThis_Id') }}
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


