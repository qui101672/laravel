@extends('layouts.admin')

@section('main')

<h1>Create Nganh</h1>

{{ Form::open(array('route' => 'nganhs.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_nganh', 'Ma_nganh:') }}
            {{ Form::input('number', 'ma_nganh') }}
        </li>

        <li>
            {{ Form::label('ten_nganh', 'Ten_nganh:') }}
            {{ Form::text('ten_nganh') }}
        </li>

        <li>
            {{ Form::label('DonVis_Id', 'DonVis_Id:') }}
            {{ Form::input('number', 'DonVis_Id') }}
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


