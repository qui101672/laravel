@extends('layouts.scaffold')

@section('main')

<h1>Create Danh_muc_hoi_thi</h1>

{{ Form::open(array('route' => 'danh_muc_hoi_this.store')) }}
<ul>
    <li>
        {{ Form::label('ma_hoi_thi', 'Ma_hoi_thi:') }}
        {{ Form::text('ma_hoi_thi') }}
    </li>

    <li>
        {{ Form::label('ten_hoi_thi', 'Ten_hoi_thi:') }}
        {{ Form::text('ten_hoi_thi') }}
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


