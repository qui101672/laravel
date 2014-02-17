@extends('layouts.admin')

@section('main')

<h1>Edit Don_vi</h1>
{{ Form::model($don_vi, array('method' => 'PATCH', 'route' => array('don_vis.update', $don_vi->id))) }}
	<ul>
        <li>
            {{ Form::label('ma_don_vi', 'Ma_don_vi:') }}
            {{ Form::input('number', 'ma_don_vi') }}
        </li>

        <li>
            {{ Form::label('ten_don_vi', 'Ten_don_vi:') }}
            {{ Form::text('ten_don_vi') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('don_vis.show', 'Cancel', $don_vi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
