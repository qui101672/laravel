@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chỉnh Sửa Ban Giám Khảo</h2>
    </div>
    <div class="box-content">
{{ Form::model($thanh_vien_bgk, array('method' => 'PATCH', 'route' => array('ban_giam_khaos.update', $thanh_vien_bgk->id))) }}
	<fieldset class="col-sm-12">
                <div class="form-group">
                <label class="control-label">Mã Thành Viên:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ma_thanh_vien',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Họ Tên:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('ho_ten',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Vị Trí:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('vi_tri',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label">Hội Thi ID:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('HoiThis_Id',null,array('class'=> 'form-control')) }}
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tài Khoàn ID:</label>
                <div class="controls row">
                    <div class="input-group col-sm-4">
                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                        {{ Form::text('TaiKhoans_Id',null,array('class'=> 'form-control')) }}
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
            </fieldset>

			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('ban_giam_khaos.show', 'Cancel', $thanh_vien_bgk->id, array('class' => 'btn')) }}
 
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>
</div>
</div>
@stop
