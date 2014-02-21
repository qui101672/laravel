@extends('layouts.admin')

@section('main')

<h1>Edit Lop</h1>
{{ Form::model($lop, array('method' => 'PATCH', 'route' => array('lop.update', $lop->id))) }}
	<ul>
        <li>
            {{ Form::label('ma_lop', 'Ma_lop:') }}
            {{ Form::text('ma_lop') }}
        </li>

        <li>
            {{ Form::label('ten_lop', 'Ten_lop:') }}
            {{ Form::text('ten_lop') }}
        </li>

        <li>
            {{ Form::label('so_luong', 'So_luong:') }}
            {{ Form::input('number', 'so_luong') }}
        </li>

        <li>
            {{ Form::label('khoa_hoc', 'Khoa_hoc:') }}
            {{ Form::input('number', 'khoa_hoc') }}
        </li>

        <li>
            {{ Form::label('Nganhs_Id', 'Nganhs_Id:') }}
            {{ Form::input('number', 'Nganhs_Id') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::textarea('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('lop.show', 'Cancel', $lop->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
