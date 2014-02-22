@extends('layouts.scaffold')

@section('main')

<h1>Edit Hoi_thi</h1>
{{ Form::model($hoi_thi, array('method' => 'PATCH', 'route' => array('hoi_this.update', $hoi_thi->id))) }}
	<ul>
        <li>
            {{ Form::label('ten_chuong_trinh', 'Ten_chuong_trinh:') }}
            {{ Form::text('ten_chuong_trinh') }}
        </li>

        <li>
            {{ Form::label('time_start', 'Time_start:') }}
            {{ Form::text('time_start') }}
        </li>

        <li>
            {{ Form::label('time_end', 'Time_end:') }}
            {{ Form::text('time_end') }}
        </li>

        <li>
            {{ Form::label('DanhMucNams_Id', 'DanhMucNams_Id:') }}
            {{ Form::input('number', 'DanhMucNams_Id') }}
        </li>

        <li>
            {{ Form::label('DanhMucHoiThis_Id', 'DanhMucHoiThis_Id:') }}
            {{ Form::input('number', 'DanhMucHoiThis_Id') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('hoi_this.show', 'Cancel', $hoi_thi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
