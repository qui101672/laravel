@extends('layouts.scaffold')

@section('main')

<h1>Edit Danh_muc_nam</h1>
{{ Form::model($danh_muc_nam, array('method' => 'PATCH', 'route' => array('danh_muc_nams.update', $danh_muc_nam->id))) }}
	<ul>
        <li>
            {{ Form::label('nam', 'Nam:') }}
            {{ Form::text('nam') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('danh_muc_nams.show', 'Cancel', $danh_muc_nam->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
