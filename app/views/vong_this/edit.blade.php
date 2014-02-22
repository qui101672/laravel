@extends('layouts.scaffold')

@section('main')

<h1>Edit Vong_thi</h1>
{{ Form::model($vong_thi, array('method' => 'PATCH', 'route' => array('vong_this.update', $vong_thi->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('vong_this.show', 'Cancel', $vong_thi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
