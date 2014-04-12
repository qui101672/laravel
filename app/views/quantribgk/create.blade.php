@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h2>
                    <i class="icon-edit"></i><span>Tạo Ban Giám Khảo</span>
                </h2>
            </div>
            <div class="box-content">
                {{ Form::open(array('route' => 'ban_giam_khaos.store','class'=>'form-horizontal')) }}
                <fieldset class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Mã Thành Viên:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('ma_thanh_vien',null,array('class'=> 'form-control','required')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Họ Tên:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('ho_ten',null,array('class'=> 'form-control','required')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-star"></i></span>
                                <select name='HoiThis_Id' class="form-control" required>
                                    <?php
                                    $hoi_thi = new Hoi_thi();
                                    $ds_hoi_thi = $hoi_thi->get_dshoithi();

                                    echo "<option value=''>--- Chọn ---</option>";
                                    foreach ($ds_hoi_thi as $ds_hoi_thi) {
                                        echo "<option value='" . $ds_hoi_thi->id . "'>" . $ds_hoi_thi->ten_chuong_trinh . "</option>";
                                    }
                                    ?>

                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tài Khoản:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('TaiKhoans_Id',null,array('class'=> 'form-control','required')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Vị Trí:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-star"></i></span>
                                <select name='vi_tri' class="form-control" required>
                                    <option value="">--Chọn--</option>
                                    <option value="Trưởng Ban">Trưởng Ban</option>
                                    <option value="Phó Trưởng Ban">Phó Trưởng Ban</option>
                                    <option value="Thành Viên">Thành Viên</option>
                                    <option value="Thư Ký">Thư Ký</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ghi Chú:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                            </div>  
                        </div>
                    </div>

                </fieldset>

                {{ Form::submit('Thêm Thành Viên', array('class' => 'btn btn-info')) }}

                {{ Form::close() }}

                @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
@stop


