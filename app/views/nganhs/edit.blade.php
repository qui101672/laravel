@extends('layouts.admin')

@section('main')

<h1>Edit Nganh</h1>
{{ Form::model($nganh, array('method' => 'PATCH', 'route' => array('nganhs.update', $nganh->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('nganhs.show', 'Cancel', $nganh->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
