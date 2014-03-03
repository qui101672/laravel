@extends('layouts.admin')

@section('main')

<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Tạo Bài Viết</h2>
    </div>
    <div class="box-content">
        {{ Form::open(array('route' => 'bai_viet.store','class'=>'form-horizontal','role'=>'form')) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                <label class="control-label" for="timepicker1">Thể Loại Bài Viết</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-star"></i></span>
                        <select name='TheLoaiBaiViets_Id' class="form-control" required="required">
                            <?php
                            foreach ($the_loai_bai_viet as $the_loai_bai_viet)
                                echo '<option value=' . $the_loai_bai_viet->id . '>' . $the_loai_bai_viet->ten_the_loai_bai_viet . '</option>';
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
                    <textarea class="cleditor" id="noi_dung_bai_viet" name='noi_dung_bai_viet' rows="3"></textarea>
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
                {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}
            </div>   

        </fieldset>
        {{ Form::close() }}

        @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
        @endif
    </div>
</div><!--/span-->
@stop


