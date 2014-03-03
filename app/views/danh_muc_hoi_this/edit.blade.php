@extends('layouts.scaffold')

@section('main')

<h1>Edit Danh_muc_hoi_thi</h1>
{{ Form::model($danh_muc_hoi_thi, array('method' => 'PATCH', 'route' => array('danh_muc_hoi_this.update', $danh_muc_hoi_thi->id))) }}
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
        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
        {{ link_to_route('danh_muc_hoi_this.show', 'Cancel', $danh_muc_hoi_thi->id, array('class' => 'btn')) }}
    </li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
