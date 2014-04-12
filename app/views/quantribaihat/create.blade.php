@extends('layouts.admin')

@section('main')
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Tạo Bài Hát</h2>
    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'bai_hats.store','class'=>'form-horizontal')) }}
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
                <label class="control-label" for="timepicker1">Tác Giả</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-star"></i></span>
                        <select name='TacGias_Id' class="form-control">
                            <option>--- Chọn Tác Giả ---</option>
                            <?php
                            $tac_gia = new Tac_gia();
                            $ds_tacgia = $tac_gia->get_dstacgia();
                            foreach ($ds_tacgia as $ds_tacgia)
                                echo '<option value=' . $ds_tacgia->id . '>' . $ds_tacgia->ho_ten . '</option>';
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


            {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}
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


