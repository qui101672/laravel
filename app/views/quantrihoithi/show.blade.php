@extends('layouts.admin')

@section('main')

<p>{{ link_to_route('hoi_this.index', 'Return to all hoi_this') }}</p>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Chi Tiết Hội Thi</h2>
        </div>
        <div class="box-content">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Tên Chương Trình</td>
                        <td>Thời Gian Bắt Đầu</td>
                        <td>Thời Gian Kết Thúc</td>
                        <td>Danh Mục Năm ID</td>
                        <td>Danh Mục Hội Thi ID</td>
                        <td colspan="3">Ghi Chú</td>
                    </tr>
                </thead>
                <tbody>
				<tr>
					<td>{{{ $hoi_thi->ten_chuong_trinh }}}</td>
					<td>{{{ $hoi_thi->time_start }}}</td>
					<td>{{{ $hoi_thi->time_end }}}</td>
					<td>{{{ $hoi_thi->DanhMucNams_Id }}}</td>
					<td>{{{ $hoi_thi->DanhMucHoiThis_Id }}}</td>
					<td>{{{ $hoi_thi->ghi_chu }}}</td>
		            <td>{{ link_to_route('hoi_this.edit', 'Edit', array($hoi_thi->id), array('class' => 'btn btn-info')) }}</td>
		            <td>
		                {{ Form::open(array('method' => 'DELETE', 'route' => array('hoi_this.destroy', $hoi_thi->id))) }}
		                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		                {{ Form::close() }}
		            </td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Hình Thức Thuộc Hội Thi</h2>
        </div>
        <div class="box-content">

	<table class="table table-striped table-bordered">
		<fieldset>
			<thead>
			<tr>
				<th>ID Hình Thức</th>
				<th>Mã Hình Thức</th>
				<th>Tên Hình Thức</th>
				<th>Nội Dung Hình Thức</th>
				<th>Số Lượng SV Yêu Cầu</th>
				<th>Số Vòng Thi</th>
				<th colspan="3">Ghi Chú</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($hinh_thuc as $hinh_thuc)
				<tr>
					<td>{{{ $hinh_thuc->id }}}</td>
					<td>{{{ $hinh_thuc->ma_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc->ten_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc->noi_dung_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc->so_luong_yeu_cau }}}</td>
					<td>{{{ $hinh_thuc->so_vong_thi }}}</td>
					<td>{{{ $hinh_thuc->ghi_chu }}}</td>
                    <td>{{ link_to_route('hinh_thuc_du_this.edit', 'Edit', array($hinh_thuc->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('hinh_thuc_du_this.destroy', $hinh_thuc->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#hinhthucduthi" id="modal-data">Thêm Hình Thức</button>
				</tbody>
		</fieldset>
			</table>
		</div>
	</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Vòng thi</h2>
        </div>
        <div class="box-content">

	<table class="table table-striped table-bordered">
		<fieldset>
			<thead>
			<tr>
				<th>Hình Thức Dự Thi ID</th>
				<th>Mã Vòng Thi</th>
				<th>Tên Vòng Thi</th>
				<th>Ghi Chú</th>
			</tr>
		</thead>

		@foreach ($vong_thi as $key => $value) 
			@foreach ($value as $value) 
				<tr>
					<td>{{{ $value->HinhThucDuThis_Id }}}</td>
					<td>{{{ $value->ma_vong_thi }}}</td>
					<td>{{{ $value->ten_vong_thi }}}</td>
					<td>{{{ $value->ghi_chu }}}</td>
				</tr>
			@endforeach
		@endforeach
		</fieldset>
		</table>
		</div>
	</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Giải Thưởng</h2>
        </div>
        <div class="box-content">

	<table class="table table-striped table-bordered">
		<fieldset>
			<thead>
			<tr>
				<th>Hình Thức Dự Thi ID</th>
				<th>Mã Giải Thưởng</th>
				<th>Tên Giải Thưởng</th>
				<th>Số Lượng</th>
				<th>Số Tiền</th>
				<th>Ghi Chú</th>
			</tr>
		</thead>

		@foreach ($giai_thuong as $key => $value) 
			@foreach ($value as $value) 
				<tr>
					<td>{{{ $value->HinhThucDuThis_Id }}}</td>
					<td>{{{ $value->ma_giai_thuong }}}</td>
					<td>{{{ $value->ten_giai_thuong }}}</td>
					<td>{{{ $value->so_luong }}}</td>
					<td>{{{ $value->so_tien }}}</td>
					<td>{{{ $value->ghi_chu }}}</td>
				</tr>
			@endforeach
		@endforeach
		</fieldset>
		</table>
		</div>
	</div>
</div>


<div class="modal fade" id="hinhthucduthi">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm Hình Thức Dự Thi</h4>
                    </div>
                    <div class="modal-body">
                        {{Form::open(array('name'=>'hinh_thuc_du_thi','id'=>'hinh_thuc_du_thi','url'=>'hinh_thuc_du_this')) }}
                        <div class="form-group">
                                <label class="control-label">Id hội thi:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('HoiThis_Id',null,array('class'=> 'form-control','id'=>'HoiThis_Id','readonly'=>'true')) }}
                                    </div>  
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label">Id danh mục năm:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('HoiThis_DanhMucNamsId',null,array('class'=> 'form-control','id'=>'HoiThis_DanhMucNamsId','readonly'=>'true')) }}
                                    </div>  
                                </div>
                        </div>
                            <div class="form-group">
                                <label class="control-label">Id danh mục hoi thi:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('HoiThis_DanhMucHoiThisId',null,array('class'=> 'form-control','id'=>'HoiThis_DanhMucHoiThisId','readonly'=>'true')) }}
                                    </div>  
                                </div>
                        </div>
                     <div class="form-group">
                                <label class="control-label">Mã Hình Thức:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ma_hinh_thuc',null,array('class'=> 'form-control','id'=>'ma_hinh_thuc')) }}
                                    </div>  
                                </div>
                            </div>
                     <div class="form-group">
                                <label class="control-label">Tên Hình Thức:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ten_hinh_thuc',null,array('class'=> 'form-control','id'=>'ten_hinh_thuc')) }}
                                    </div>  
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="control-label">Nội Dung Hình Thức:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        <textarea name="noi_dung_hinh_thuc" id="noi_dung_hinh_thuc" rows="6" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 126px;"></textarea>
                                    </div>  
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="control-label">Số Lượng Yêu Cầu:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('so_luong_yeu_cau',null,array('class'=> 'form-control','id'=>'so_luong_yeu_cau')) }}
                                    </div>  
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="control-label">Số Vòng Thi:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('so_vong_thi',null,array('class'=> 'form-control','id'=>'so_vong_thi')) }}
                                    </div>  
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="control-label">Ghi Chú:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-8">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                                    </div>  
                                </div>
                            </div>
                        
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                   
                        <button type="button" class="btn btn-primary" id="tao_hinh_thuc">Tạo Hình Thức Dự Thi</button>
                     </div>
                     {{ Form::close() }}
                    </div>
                    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

@stop
