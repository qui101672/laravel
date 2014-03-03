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
            <h2><i class="icon-edit"> </i>Chi Tiết Hội Thi</h2>
        </div>
        <div class="box-content">

	<table class="table table-striped table-bordered">
		<fieldset>
			<thead>
			<tr>
				<th>Mã Hình Thức</th>
				<th>Tên Hình Thức</th>
				<th>Nội Dung Hình Thức</th>
				<th>Số Lượng SV Yêu Cầu</th>
				<th>Số Vòng Thi</th>
				<th colspan="3">Ghi Chú</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($hinh_thuc as $hinh_thuc_du_thi)
				<tr>
					<td>{{{ $hinh_thuc_du_thi->ma_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->ten_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->noi_dung_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->so_luong_yeu_cau }}}</td>
					<td>{{{ $hinh_thuc_du_thi->so_vong_thi }}}</td>
					<td>{{{ $hinh_thuc_du_thi->ghi_chu }}}</td>
                    <td>{{ link_to_route('hinh_thuc_du_this.edit', 'Edit', array($hinh_thuc_du_thi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('hinh_thuc_du_this.destroy', $hinh_thuc_du_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
				</tbody>
		</fieldset>
			</table>
		</div>
	</div>
</div>

@stop
