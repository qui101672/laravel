@extends('layouts.admin')

@section('main')

<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Lớp</h2>
    </div>
    <div class="box-content">
    {{ Form::model($lop, array('method' => 'PATCH','class'=>'form-horizontal', 'route' => array('lop.update', $lop->id))) }}
        <fieldset class="col-sm-12">
            <div class="form-group">
                  <label class="control-label" for="date01">Mã Lớp:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('ma_lop',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
            <div class="form-group">
                  <label class="control-label" for="date01">Tên Lớp:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('ten_lop',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
            <div class="form-group">
                  <label class="control-label" for="date01">Số Lượng:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('so_luong',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
            <div class="form-group">
                  <label class="control-label" for="date01">Khóa Học:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('khoa_hoc',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
            <div class="form-group">
                  <label class="control-label">Ngành:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    <select name='Nganhs_Id' class="form-control" required="required">
                      <?php
                      $nganh = Nganh::all();
                      foreach ($nganh as $nganh){
                        ?>
                        <option value="<?php echo $nganh->id; ?>" <?php if ($lop->Nganhs_Id == $nganh->id) echo "selected='selected'"; ?>><?php echo $nganh->ten_nganh; ?></option>
                        <?php
                      }                     
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
        </fieldset>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('lop.show', 'Cancel', $lop->id, array('class' => 'btn')) }}
 
    {{ Form::close() }}
</div>
</div>
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
