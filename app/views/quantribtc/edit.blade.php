@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Chỉnh Sửa Ban Tổ Chức</h2>
            </div>
            <div class="box-content">
                {{ Form::model($btc, array('method' => 'PATCH', 'route' => array('ban_to_chuc.update', $btc->id))) }}
                <fieldset class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Username:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('username',null,array('class'=> 'form-control')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-star"></i></span>
                                <select name='HoiThis_Id' class="form-control" required="required">
                                    <?php
                                    $hoi_thi = new Hoi_thi();
                                    $ds_hoi_thi = $hoi_thi->get_dshoithi();
                                    echo "<option>--- Chọn ---</option>";
                                    foreach ($ds_hoi_thi as $ds_hoi_thi) {
                                        echo "<option value='" . $ds_hoi_thi->id . "'>" . $ds_hoi_thi->ten_chuong_trinh . "</option>";
                                    }
                                    ?>

                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Vị Trí:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-star"></i></span>
                                <select name='vi_tri_btcs' class="form-control" required="required">
                                    <option value='null'>--Chọn--</option>
                                    <option value='Trưởng Ban'>Trưởng Ban</option>
                                    <option value='Phó Ban'>Phó Ban</option>
                                    <option value='Thành Viên'>Thành Viên</option>

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
                    {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                    {{ link_to_route('ban_to_chuc.show', 'Cancel', $btc->id, array('class' => 'btn')) }}
                </fieldset>

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
