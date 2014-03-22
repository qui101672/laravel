@extends('layouts.scaffold')

@section('main')

<h1>Edit Thanh_phan_tham_gium</h1>
{{ Form::model($thanh_phan_tham_gium, array('method' => 'PATCH', 'route' => array('thanh_phan_tham_gia.update', $thanh_phan_tham_gium->id))) }}
	<ul>
        <li>
            {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
            {{ Form::input('number', 'TaiKhoans_Id') }}
        </li>

        <li>
            {{ Form::label('TietMucDuThis_Id', 'TietMucDuThis_Id:') }}
            {{ Form::input('number', 'TietMucDuThis_Id') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('thanh_phan_tham_gia.show', 'Cancel', $thanh_phan_tham_gium->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
