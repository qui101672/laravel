@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Chỉnh Sửa Danh Mục Hội Thi</h2>
            </div>
            <div class="box-content">
                <fieldset class="col-sm-12">
                    {{ Form::model($danh_muc_hoi_thi, array('class' => 'form-horizontal'),array('method' => 'PATCH', 'route' => array('danh_muc_hoi_thi.update', $danh_muc_hoi_thi->id))) }}
                    <div class="form-group">
                        <label class="control-label">Loại Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                <select name='ma_hoi_thi' id='ma_hoi_thi' class="form-control">
                                    <option value="TM" <?php if ($danh_muc_hoi_thi->ma_hoi_thi == "TM") echo "selected='selected'"; ?>>Tiết Mục</option>
                                    <option value="CT" <?php if ($danh_muc_hoi_thi->ma_hoi_thi == "CT") echo "selected='selected'"; ?>>Chương Trình  </option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tên Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::text('ten_hoi_thi',null,array('class'=> 'form-control','required')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ghi Chú:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                {{ Form::textarea('ghi_chu',null,array('class'=> 'form-control')) }}
                            </div>  
                        </div>
                    </div>
                    <div class="form-action">
                        {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
                        {{ link_to_route('danh_muc_hoi_thi.show', 'Huỷ', $danh_muc_hoi_thi->id, array('class' => 'btn')) }}

                    </div>


                    {{ Form::close() }}
                </fieldset>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>

@endif

@stop