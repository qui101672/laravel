@extends('layouts.admin')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Bài Hát</h2>
    </div>
    <div class="box-content">
        {{ Form::model($bai_hat, array('method' => 'PATCH', 'route' => array('bai_hats.update', $bai_hat->id))) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label">Mã Bài Hát:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_bai_hat',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên Bài Hát:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_bai_hat',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" >Tác Giả</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-star"></i></span>
                        
                        <select name='TacGias_Id' class="form-control">
                            <option>--- Chọn Tác Giả ---</option>
                            <?php
                            $tac_gia = new Tac_gia();
                            $ds_tacgia = $tac_gia->get_dstacgia();
                            foreach ($ds_tacgia as $ds_tacgia)
                            {
                               ?>
                            <option value="<?php echo $ds_tacgia->id;?>" <?php if($ds_tacgia->id == $bai_hat->TacGias_Id) echo "selected='selected'";?>><?php echo $ds_tacgia->ho_ten;?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Năm Sáng Tác:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('nam_sang_tac',null,array('class'=> 'form-control')) }}
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


            {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
                {{ link_to_route('bai_hats.show', 'Huỷ', $bai_hat->id, array('class' => 'btn')) }}
        </fieldset>
        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</div>
@stop


