@extends('layouts.admin')

@section('main')

<h1>Edit Bai_hat</h1>
{{ Form::model($bai_hat, array('method' => 'PATCH', 'route' => array('bai_hats.update', $bai_hat->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('bai_hats.show', 'Cancel', $bai_hat->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
