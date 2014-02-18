@extends('layouts.scaffold')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-user"></i><span>Chỉnh Sửa Thông Tin Sinh Viên</span></h2>
    </div>
    <div class="box-content">
            @if(Auth::user->doi_tuong == "Sinh Viên")
            {{ Form::model($sinh_vien, array('method' => 'PATCH', 'route' => array('sinh_viens.update', $sinh_vien->id))) }}
                <div>
                    {{ Form::label('mssv', 'Mssv:') }}
                    {{ Form::text('mssv') }}
                </div>

                <div>
                    {{ Form::label('ho_ten', 'Ho ten:') }}
                    {{ Form::text('ho_ten') }}
                </div>

                <div>
                    {{ Form::label('ngay_sinh', 'Ngay sinh:') }}
                    {{ Form::text('ngay_sinh') }}
                </div>

                <div>
                    {{ Form::label('gioi_tinh', 'Gioi tinh:') }}
                    {{ Form::text('gioi_tinh') }}
                </div>

                <div>
                    {{ Form::label('dia_chi', 'Dia chi:') }}
                    {{ Form::text('dia_chi') }}
                </div>

                <div>
                    {{ Form::label('que_quan', 'Que quan:') }}
                    {{ Form::text('que_quan') }}
                </div>

                <div>
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email') }}
                </div>

                <div>
                    {{ Form::label('sdt', 'Sdt:') }}
                    {{ Form::text('sdt') }}
                </div>

                <div>
                    {{ Form::label('ghi_chu', 'Ghi chu:') }}
                    {{ Form::text('ghi_chu') }}
                </div>
     
                {{ Form::label('Lops_Id', 'Lops_Id:') }}
                {{ Form::input('number', 'Lops_Id') }}
       
                {{ Form::label('TaiKhoans_Id', 'TaiKhoans_Id:') }}
                {{ Form::input('number', 'TaiKhoans_Id') }}

                {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                {{ link_to_route('sinh_viens.show', 'Cancel', $sinh_vien->id, array('class' => 'btn')) }}

                {{ Form::close() }}
            @elseif (Auth::user->doi_tuong == "Cán Bộ") 
                    {{ Form::model($can_bo, array('method' => 'PATCH', 'route' => array('can_bos.update', $can_bo->id))) }}
                <div>
                    {{ Form::label('mscb', 'Mscb:') }}
                    {{ Form::text('mscb') }}
                </div>

                <div>
                    {{ Form::label('ho_ten', 'Ho ten:') }}
                    {{ Form::text('ho_ten') }}
                </div>

                <div>
                    {{ Form::label('ngay_sinh', 'Ngay sinh:') }}
                    {{ Form::text('ngay_sinh') }}
                </div>

                <div>
                    {{ Form::label('gioi_tinh', 'Gioi tinh:') }}
                    {{ Form::text('gioi_tinh') }}
                </div>

                <div>
                    {{ Form::label('dia_chi', 'Dia chi:') }}
                    {{ Form::text('dia_chi') }}
                </div>

                <div>
                    {{ Form::label('que_quan', 'Que quan:') }}
                    {{ Form::text('que_quan') }}
                </div>

                <div>
                    {{ Form::label('chuc_vu', 'Chuc vu:') }}
                    {{ Form::text('chuc_vu') }}
                </div>

                <div>
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email') }}
                </div>

                <div>
                    {{ Form::label('sdt', 'Sdt:') }}
                    {{ Form::text('sdt') }}
                </div>

                <div>
                    {{ Form::label('ghi_chu', 'Ghi chu:') }}
                    {{ Form::text('ghi_chu') }}
                </div>

                <div>
                    {{ Form::label('donvis_id', 'Donvis id:') }}
                    {{ Form::text('donvis_id') }}
                </div>

                <div>
                    {{ Form::label('taikhoans_id', 'Taikhoans id:') }}
                    {{ Form::text('taikhoans_id') }}
                </div>

                <div>
                    {{ Form::submit() }}
                </div>
 

                    {{ Form::close() }}
            @endif


@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>
@stop


 

    

 