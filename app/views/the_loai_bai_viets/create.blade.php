@extends('layouts.admin')

@section('main')
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Tạo Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'the_loai_bai_viets.store')) }}
     
            {{ Form::label('ma_the_loai_bai_viet', 'Mã Thể Loại Bài Viết:') }}
            {{ Form::text('ma_the_loai_bai_viet') }}
        
            {{ Form::label('ten_the_loai_bai_viet', 'Thể Loại Bài Viết:') }}
            {{ Form::text('ten_the_loai_bai_viet') }}
        
            {{ Form::label('ghi_chu', 'Ghi Chú:') }}
            {{ Form::textarea('ghi_chu') }}
      
            {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}
        
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>
</div>




@stop


