@extends('layouts.scaffold')

@section('main')

<h1>Create Tac_gium</h1>

{{ Form::open(array('route' => 'tac_gia.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_tac_gia', 'Ma_tac_gia:') }}
            {{ Form::text('ma_tac_gia') }}
        </li>

        <li>
            {{ Form::label('ho_ten', 'Ho_ten:') }}
            {{ Form::text('ho_ten') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::textarea('ghi_chu') }}
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


