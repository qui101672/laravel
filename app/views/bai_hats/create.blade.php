@extends('layouts.admin')

@section('main')

<h1>Create Bai_hat</h1>

{{ Form::open(array('route' => 'bai_hats.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_bai_hat', 'Ma_bai_hat:') }}
            {{ Form::text('ma_bai_hat') }}
        </li>

        <li>
            {{ Form::label('ten_bai_hat', 'Ten_bai_hat:') }}
            {{ Form::text('ten_bai_hat') }}
        </li>

        <li>
            {{ Form::label('nam_sang_tac', 'Nam_sang_tac:') }}
            {{ Form::input('number', 'nam_sang_tac') }}
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


