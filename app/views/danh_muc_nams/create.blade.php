@extends('layouts.scaffold')

@section('main')

<h1>Create Danh_muc_nam</h1>

{{ Form::open(array('route' => 'danh_muc_nams.store')) }}
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


