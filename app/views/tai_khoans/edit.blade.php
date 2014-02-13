@extends('layouts.scaffold')

@section('main')

<h1>Edit Tai_khoan</h1>
{{ Form::model($tai_khoan, array('method' => 'PATCH', 'route' => array('tai_khoans.update', $tai_khoan->id))) }}
	<ul>
        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
        </li>

        <li>
            {{ Form::label('ma_quyen', 'Ma_quyen:') }}
            {{ Form::input('number', 'ma_quyen') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tai_khoans.show', 'Cancel', $tai_khoan->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
