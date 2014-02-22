@extends('layouts.admin')

@section('main')

<h1>Create Hoi_thi</h1>

{{ Form::open(array('route' => 'hoi_this.store')) }}
 
    <div>
        {{ Form::label('ten_chuong_trinh', 'Ten chuong trinh:') }}
        {{ Form::text('ten_chuong_trinh') }}
    </div>

    <div>
        {{ Form::label('danhmucnams_id', 'Danhmucnams id:') }}
        {{ Form::text('danhmucnams_id') }}
    </div>
    <div>
        {{ Form::label('danhmuchoithis_id', 'Danhmuchoithis id:') }}
        {{ Form::text('danhmuchoithis_id') }}
    </div>

    <div>
        {{ Form::label('time_start', 'Time start:') }}
        {{ Form::text('time_start') }}
    </div>

    <div>
        {{ Form::label('time_end', 'Time end:') }}
        {{ Form::text('time_end') }}
    </div>

    <div>
        {{ Form::label('ghi_chu', 'Ghi chu:') }}
        {{ Form::text('ghi_chu') }}
    </div>

    <div>
        {{ Form::submit() }}
    </div>
 
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


