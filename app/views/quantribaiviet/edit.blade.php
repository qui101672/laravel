@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Bài Viết</h2>
    </div>
    <div class="box-content">
        {{ Form::model($bai_viet, array('method' => 'PATCH','class'=>'form-horizontal', 'route' => array('bai_viet.update', $bai_viet->id))) }}
        <fieldset class="col-sm-12">

            <div class="form-group">
                <label class="control-label">Thể Loại Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        <select name='TheLoaiBaiViets_Id' class="form-control" required="required">
                            <?php
                            //Lay du lieu ban the loai bai viet
                            foreach ($the_loai_bai_viet as $the_loai_bai_viet) {
                                ?>
                                <option value="<?php echo $the_loai_bai_viet->id; ?>" <?php if ($bai_viet->TheLoaiBaiViets_Id == $the_loai_bai_viet->id) echo "selected='selected'"; ?>><?php echo $the_loai_bai_viet->ten_the_loai_bai_viet; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>  
                </div>
            </div>


            <div class="form-group">
                <label class="control-label" for="date01">Mã Bài Viết:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_bai_viet',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="date01">Tiêu Đề:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('tieu_de_bai_viet',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>

            <div class="form-group hidden-xs">
                <label class="control-label" for="textarea2">Nội Dung Bài Viết:</label>
                <div class="controls">
                    {{ Form::textarea('noi_dung_bai_viet',null,array('class'=> 'cleditor')) }}
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="date01">Thời Gian Tạo:</label>
                <div class="controls row">
                    <div class="input-group date col-sm-4">
                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        <input type="text" class="form-control date-picker" name='created_at' data-date-format="dd/mm/yyyy"/>
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

            <div class="form-group">
                <label class="control-label">Tag:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('tag',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-actions">
                {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                {{ link_to_route('bai_viet.index', 'Cancel', array(), array('class' => 'btn')) }}
            </div>   

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

