@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Tạo Danh Mục Hội Thi</h2>
            </div>
            <div class="box-content">
                    {{ Form::open(array('route' => 'danh_muc_hoi_thi.store'),array('class' => 'form-horizontal')) }}
                    <div class="form-group">
                        <label class="control-label">Loại Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                <select name="ma_hoi_thi" id="ma_hoi_thi" class="form-control">
                                    <option value="TM">Tiết Mục</option>
                                    <option value="CT">Chương Trình</option>
                                </select>
                            </div>  
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tên Hội Thi:</label>
                        <div class="controls row">
                            <div class="input-group col-sm-4">
                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                <input type="text" name="ten_hoi_thi" id="ten_hoi_thi" class="form-control" required>
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
                        {{ Form::submit('Tạo', array('class' => 'btn btn-info')) }}
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


