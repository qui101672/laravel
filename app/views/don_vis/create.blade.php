@extends('layouts.admin')

@section('main')

<h1>Create Don_vi</h1>

{{ Form::open(array('route' => 'don_vis.store')) }}
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


