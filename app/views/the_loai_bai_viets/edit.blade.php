@extends('layouts.admin')

@section('main')
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Sửa Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">

{{ Form::model($the_loai_bai_viet, array('method' => 'PATCH', 'route' => array('the_loai_bai_viets.update', $the_loai_bai_viet->id))) }}
 
            {{ Form::label('ma_the_loai_bai_viet', 'Ma_the_loai_bai_viet:') }}
            {{ Form::text('ma_the_loai_bai_viet') }}
 
            {{ Form::label('ten_the_loai_bai_viet', 'Ten_the_loai_bai_viet:') }}
            {{ Form::text('ten_the_loai_bai_viet') }}
 
            {{ Form::label('ghi_chu', 'Ghi_chu:') }}
            {{ Form::textarea('ghi_chu') }}
 
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('the_loai_bai_viets.show', 'Cancel', $the_loai_bai_viet->id, array('class' => 'btn')) }}
 
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
    </div>
</div>
@stop
