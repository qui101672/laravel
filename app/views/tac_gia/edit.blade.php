@extends('layouts.scaffold')

@section('main')

<h1>Edit Tac_gium</h1>
{{ Form::model($tac_gium, array('method' => 'PATCH', 'route' => array('tac_gia.update', $tac_gium->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('tac_gia.show', 'Cancel', $tac_gium->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
