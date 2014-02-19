@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Chỉnh Sửa Đơn Vị</span>
        </h2>
    </div>
    <div class="box-content">
         {{ Form::model($don_vi, array('method' => 'PATCH', 'route' => array('don_vi.update', $don_vi->id))) }}

            {{ Form::label('ma_don_vi', 'Ma_don_vi:') }}
            {{ Form::input('number', 'ma_don_vi') }}

            {{ Form::label('ten_don_vi', 'Ten_don_vi:') }}
            {{ Form::text('ten_don_vi') }}

            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::text('ghi_chu') }}

            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('don_vi.show', 'Cancel', $don_vi->id, array('class' => 'btn')) }}

{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>
</div>
 


@stop
