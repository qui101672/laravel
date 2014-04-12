@extends('layouts.scaffold')

@section('main')
<div class="box">
    <div class="box-header">
        @if(Auth::user()->doi_tuong == 'Sinh Viên')
        <center><h3><span>Chỉnh Sửa Thông Tin Sinh Viên</span></h3></center>
    </div>
    <div class="box-content">
        <table class="table table-striped">
            <tbody>
                {{ Form::model($sinh_vien, array('method' => 'PATCH', 'route' => array('thong_tin.update', $sinh_vien->id))) }}
                <tr>
                    <td>{{ Form::label('mssv', 'MSSV:') }}</td>
                    <td>{{ Form::text('mssv') }}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('ho_ten', 'Họ Tên:') }}</td>
                    <td>{{ Form::text('ho_ten') }}</td>
                </tr>
                <tr>
                    <td> {{ Form::label('Lops_Id', 'Lớp:') }}</td>
                    <td>      <select name='Lops_Id' class="form-control" required="required">
                            <?php
                            $lop = Lop::all();
                            foreach ($lop as $lop) {
                                ?>
                                <option value="<?php echo $lop->id; ?>" <?php if ($sinh_vien->Lops_Id == $lop->id) echo "selected='selected'"; ?>><?php echo $lop->ten_lop; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('ngay_sinh', 'Ngày Sinh:') }} 
                    </td>
                    <td> 
                        {{ Form::text('ngay_sinh') }} 
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('gioi_tinh', 'Giới Tính:') }}
                    </td>
                    <td> 
                        {{ Form::text('gioi_tinh') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('dia_chi', 'Địa Chỉ:') }}
                    </td>
                    <td>
                        {{ Form::text('dia_chi') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('que_quan', 'Quê Quán:') }}
                    </td>
                    <td>   
                        {{ Form::text('que_quan') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('email', 'Email:') }}
                    </td>
                    <td>    
                        {{ Form::text('email') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('sdt', 'SĐT:') }}
                    </td>
                    <td>  
                        {{ Form::text('sdt') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('ghi_chu', 'Ghi Chú:') }}
                    </td>
                    <td>   
                        {{ Form::text('ghi_chu') }}
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        {{ Form::submit('Chỉnh Sửa', array('class' => 'btn btn-info')) }}
                    </td>
                </tr>
                {{ Form::close() }}
            </tbody>
        </table>
        @else
        <center><h3><span>Chỉnh Sửa Thông Tin Cán Bộ</span></h3></center>
    </div>
    <div class="box-content">
        <table class="table table-striped">
            <tbody>
                {{ Form::model($can_bo, array('method' => 'PATCH', 'route' => array('thong_tin.update', $can_bo->id))) }}
                <tr> 
                    <td>
                        {{ Form::label('mscb', 'MSCB:') }}
                    </td>
                    <td>
                        {{ Form::text('mscb') }}
                    </td>
                </tr>

                <tr> 
                    <td>
                        {{ Form::label('ho_ten', 'Họ Tên:') }}
                    </td>
                    <td>
                        {{ Form::text('ho_ten') }}
                    </td>
                <tr> 
                    <td>
                        {{ Form::label('chuc_vu', 'Chức Vụ:') }}
                    </td>
                    <td>
                        {{ Form::text('chuc_vu') }}
                    </td>

                </tr>
                <tr> 
                    <td>
                        {{ Form::label('DonVis_Id', 'Đơn Vị:') }}
                    </td>
                    <td>
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
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('ngay_sinh', 'Ngày Sinh:') }}
                    </td>
                    <td>
                        {{ Form::text('ngay_sinh') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('gioi_tinh', 'Giới Tính:') }}
                    </td>
                    <td>
                        {{ Form::text('gioi_tinh') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('dia_chi', 'Địa Chỉ:') }}
                    </td>
                    <td>
                        {{ Form::text('dia_chi') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('que_quan', 'Quê Quán:') }}
                    </td>
                    <td>
                        {{ Form::text('que_quan') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('email', 'Email:') }}
                    </td>
                    <td>
                        {{ Form::text('email') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('sdt', 'SĐT:') }}
                    </td>
                    <td>
                        {{ Form::text('sdt') }}
                    </td>
                </tr>
                <tr> 
                    <td>
                        {{ Form::label('ghi_chu', 'Ghi Chú:') }}
                    </td>
                    <td>
                        {{ Form::text('ghi_chu') }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        {{ Form::submit('Chỉnh Sửa', array('class' => 'btn btn-info')) }}
                    </td>
                </tr>


            </tbody>
        </table>
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






