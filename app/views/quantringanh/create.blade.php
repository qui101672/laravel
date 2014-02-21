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
                    {{ Form::text('ma_nganh',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="date01">Tên Ngành:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('ten_nganh',null,array('class'=> 'form-control')) }}
                  </div>  
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="date01">Đơn Vị ID:</label>
                  <div class="controls row">
                  <div class="input-group col-sm-4">
                    <span class="input-group-addon"><i class="icon-edit"></i></span>
                    {{ Form::text('DonVis_Id',null,array('class'=> 'form-control')) }}
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

            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
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


