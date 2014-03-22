@extends('layouts.scaffold')

@section('main')

<h1>Create Tiet_muc_du_thi</h1>

{{ Form::open(array('route' => 'tiet_muc_du_this.store')) }}
	<ul>
        <li>
            {{ Form::label('ms_tiet_muc', 'Ms_tiet_muc:') }}
            {{ Form::text('ms_tiet_muc') }}
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


