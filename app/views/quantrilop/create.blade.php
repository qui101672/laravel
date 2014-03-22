@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="box">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Tạo Lớp</span>
        </h2>
    </div>
    <div class="box-content">
    {{ Form::open(array('route' => 'lop.store','class'=>'form-horizontal','role'=>'form')) }}
                <fieldset class="col-sm-12">
                 <div class="form-group">
                    <label class="control-label"><h2>Mã Lớp:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('ma_lop',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"><h2>Tên Lớp:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('ten_lop',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"><h2>Số Lượng Viên Sinh:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('so_luong',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label"><h2>Khóa Học:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('khoa_hoc',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label"><h2>Ngành Học:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      <select name='Nganhs_Id' class="form-control" required="required">
                      <?php
                      foreach ($nganh as $nganh)
                      echo '<option value='.$nganh->id.'>'.$nganh->ma_nganh.' -- '.$nganh->ten_nganh.'</option>';                        
                    ?>
                    </select>
                   
                    </div>  
                    </div>
                  </div>



                  
                  <div class="form-group">
                    <label class="control-label"><h2>Ghi Chú:</h2></label>
                    <div class="controls row">
                    <div class="input-group col-sm-4">
                      <span class="input-group-addon"><i class="icon-edit"></i></span>
                      {{ Form::text('ghi_chu',null,array('class'=> 'form-control')) }}
                    </div>  
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                @if ($errors->any())
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                @endif
        </fieldset>
    {{ Form::close() }}
 

        </div>
        </div>
</div>
</div>
@stop


