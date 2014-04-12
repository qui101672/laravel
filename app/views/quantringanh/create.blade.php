@extends('layouts.admin')

@section('main')

<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Tạo Ngành Học</h2>
    </div>
    <div class="box-content">
        <fieldset class="col-sm-12">
            {{ Form::open(array('route' => 'nganh.store','class'=>'form-horizontal')) }}                    
            <div class="form-group">
                <label class="control-label" for="date01">Mã Ngành:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_nganh',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="date01">Tên Ngành:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ten_nganh',null,array('class'=> 'form-control','required')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="date01">Đơn Vị:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-star"></i></span>
                        <select name='DonVis_Id' id='DanhMucNams_Id' class="form-control" required>
                            <option value=''>---Chọn---</option>
                            <?php
                            $donvi = new Don_vi();
                            $donvi = $donvi->get_dsDonVi();
                            foreach ($donvi as $donvi)
                                echo '<option value=' . $donvi->id . '>' . $donvi->ten_don_vi . '</option>';
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="date01">Ghi Chú:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tạo Ngành Học</button>

            </form>
        </fieldset>
        {{ Form::close() }}
    </div>
</div>

@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


