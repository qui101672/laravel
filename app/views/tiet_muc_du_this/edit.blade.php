@extends('layouts.scaffold')

@section('main')

<h1>Edit Tiet_muc_du_thi</h1>
{{ Form::model($tiet_muc_du_thi, array('method' => 'PATCH', 'route' => array('tiet_muc_du_this.update', $tiet_muc_du_thi->id))) }}
	<ul>
        <li>
            {{ Form::label('ms_tiet_muc', 'Ms_tiet_muc:') }}
            {{ Form::text('ms_tiet_muc') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tiet_muc_du_this.show', 'Cancel', $tiet_muc_du_thi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
