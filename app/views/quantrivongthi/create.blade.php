@extends('layouts.admin')

@section('main')

<h1>Create Vong_thi</h1>

{{ Form::open(array('route' => 'vong_this.store')) }}
	<ul>
        <li>
            {{ Form::label('ma_vong_thi', 'Ma_vong_thi:') }}
            {{ Form::text('ma_vong_thi') }}
        </li>

        <li>
            {{ Form::label('ten_vong_thi', 'Ten_vong_thi:') }}
            {{ Form::text('ten_vong_thi') }}
        </li>

        <li>
            {{ Form::label('HinhThucDuThis_Id', 'HinhThucDuThis_Id:') }}
            {{ Form::input('number', 'HinhThucDuThis_Id') }}
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


