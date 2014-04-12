@extends('layouts.scaffold')

@section('main')
<div class="box">
    <div class="box-header">
        @if(Auth::user()->doi_tuong == 'Sinh Viên')
        <h2><i class="icon-user"></i><span>Chỉnh Sửa Thông Tin Sinh Viên</span></h2>
    </div>
    <div class="box-content">
        {{ Form::model($sinh_vien, array('method' => 'PATCH', 'route' => array('thong_tin.update', $sinh_vien->id))) }}
        <div>
            {{ Form::label('mssv', 'MSSV:') }}
            {{ Form::text('mssv') }}
        </div>

        <div>
            {{ Form::label('ho_ten', 'Họ Tên:') }}
            {{ Form::text('ho_ten') }}
        </div>
        {{ Form::label('Lops_Id', 'Lớp:') }}
        <select name='Lops_Id' class="form-control" required="required">
            <?php
            $lop = Lop::all();
            foreach ($lop as $lop) {
                ?>
                <option value="<?php echo $lop->id; ?>" <?php if ($sinh_vien->Lops_Id == $lop->id) echo "selected='selected'"; ?>><?php echo $lop->ten_lop; ?></option>
                <?php
            }
            ?>
        </select> 
        <div>
            {{ Form::label('ngay_sinh', 'Ngày Sinh:') }}
            {{ Form::text('ngay_sinh') }}
        </div>

        <div>
            {{ Form::label('gioi_tinh', 'Giới Tính:') }}
            {{ Form::text('gioi_tinh') }}
        </div>

        <div>
            {{ Form::label('dia_chi', 'Địa Chỉ:') }}
            {{ Form::text('dia_chi') }}
        </div>

        <div>
            {{ Form::label('que_quan', 'Quê Quán:') }}
            {{ Form::text('que_quan') }}
        </div>

        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </div>

        <div>
            {{ Form::label('sdt', 'SĐT:') }}
            {{ Form::text('sdt') }}
        </div>

        <div>
            {{ Form::label('ghi_chu', 'Ghi Chú:') }}
            {{ Form::text('ghi_chu') }}
        </div>



        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}


        {{ Form::close() }}
        @else
        <h2><i class="icon-user"></i><span>Chỉnh Sửa Thông Tin Cán Bộ</span></h2>
    </div>
    <div class="box-content">
        {{ Form::model($can_bo, array('method' => 'PATCH', 'route' => array('thong_tin.update', $can_bo->id))) }}
        <div>
            {{ Form::label('mscb', 'MSCB:') }}
            {{ Form::text('mscb') }}
        </div>

        <div>
            {{ Form::label('ho_ten', 'Họ Tên:') }}
            {{ Form::text('ho_ten') }}
        </div>
        <div>
            {{ Form::label('chuc_vu', 'Chức Vụ:') }}
            {{ Form::text('chuc_vu') }}
        </div>


        <div>
            {{ Form::label('DonVis_Id', 'Đơn Vị:') }}
            <select name='DonVis_Id' class="form-control" required="required">
                <?php
                $donvi = Don_vi::all();
                foreach ($donvi as $donvi) {
                    ?>
                    <option value="<?php echo $donvi->id; ?>" <?php if ($can_bo->DonVis_Id == $donvi->id) echo "selected='selected'"; ?>><?php echo $donvi->ten_don_vi; ?></option>
                    <?php
                }
                ?>
            </select> 
        </div>
        <div>
            {{ Form::label('ngay_sinh', 'Ngày Sinh:') }}
            {{ Form::text('ngay_sinh') }}
        </div>

        <div>
            {{ Form::label('gioi_tinh', 'Giới Tính:') }}
            {{ Form::text('gioi_tinh') }}
        </div>

        <div>
            {{ Form::label('dia_chi', 'Địa Chỉ:') }}
            {{ Form::text('dia_chi') }}
        </div>

        <div>
            {{ Form::label('que_quan', 'Quê Quán:') }}
            {{ Form::text('que_quan') }}
        </div>

        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </div>

        <div>
            {{ Form::label('sdt', 'SĐT:') }}
            {{ Form::text('sdt') }}
        </div>

        <div>
            {{ Form::label('ghi_chu', 'Ghi Chú:') }}
            {{ Form::text('ghi_chu') }}
        </div>
        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}


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






