@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2><i class="icon-edit"></i>
            <span>Chỉnh Sửa Tài Khoản</span>
        </h2>
    </div>
    <div class="box-content">
        {{ Form::model($tai_khoan, array('method' => 'PATCH', 'route' => array('tai_khoan.update', $tai_khoan->id))) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label"><h2>Username:</h2></label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('username',null,array('class'=> 'form-control','readonly')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label"><h2>Quyền:</h2></label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <select name='PhanQuyen_Id' class="form-control" required="required">
                            <?php
                            $phan_quyen = Phan_quyen::all();
                            foreach ($phan_quyen as $phan_quyen) {
                                ?>
                                <option value="<?php echo $phan_quyen->id; ?>" <?php if ($tai_khoan->PhanQuyen_Id == $phan_quyen->id) echo "selected='selected'"; ?>>
                                    <?php echo $phan_quyen->ten_quyen; ?></option>
                                <?php
                            }
                            ?>
                        </select> 
                    </div>
                </div>
            </div>
            {{ Form::submit('Cập Nhật', array('class' => 'btn btn-info')) }}
            {{ link_to_route('tai_khoan.show', 'Huỷ', $tai_khoan->id, array('class' => 'btn')) }}
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
