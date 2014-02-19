@extends('layouts.admin')

@section('main')


<div class="box span12">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Tạo Đơn Vị</span>
        </h2>
    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'don_vi.store')) }}
        
                    {{ Form::label('ma_don_vi', 'Ma_don_vi:') }}
                    {{ Form::input('number', 'ma_don_vi') }}
   
                    {{ Form::label('ten_don_vi', 'Ten_don_vi:') }}
                    {{ Form::text('ten_don_vi') }}
       
                    {{ Form::label('ghi_chu', 'Ghi_chu:') }}
                    {{ Form::text('ghi_chu') }}
       
        			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
                    
        {{ Form::close() }}

        @if ($errors->any())
        	<ul>
        		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
        	</ul>
        @endif
</div>
</div>
@stop


