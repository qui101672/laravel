@extends('layouts.admin')

@section('main')




<div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"></i>Tạo Ngành Học</h2>
        </div>
        <div class="box-content">
        <fieldset class="col-sm-12">
        {{ Form::model($nganh, array('method' => 'PATCH', 'route' => array('nganh.update', $nganh->id))) }}              
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

            
                    {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('nganh.show', 'Cancel', $nganh->id, array('class' => 'btn')) }}
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
