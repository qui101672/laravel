@extends('layouts.admin')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="box">
			<div class="box-header">
				<h2><i class="icon-edit"> </i>Phiếu Đăng Ký Dự Thi</h2>
			</div>
			<div class="box-content">
				
				{{ link_to_route('dang_ky_phieus.create', 'Tạo Phiếu Đăng Ký', array(), array('class' => 'btn btn-info')) }}
				<table class="table table-hover">
					<thead>
						<tr>
							<td>Mã Phiếu Đăng Ký</td>
							<td>Tên Chương Trình</td>
							<td>Thời Gian Bắt Đầu</td>
							<td>Thời Gian Kết Thúc</td>
							<td>Trạng Thái</td>
							<td>Ghi Chú</td>
						</tr>
					</thead>
					<tbody>
					@foreach ($phieu_dang_ky as $phieu_dang_ky)
						<tr>
							
							<td>{{{$phieu_dang_ky->ma_phieu_dang_ky}}}</td>
							<td>{{{$phieu_dang_ky->ten_chuong_trinh}}}</td>
							<td>{{{$phieu_dang_ky->time_start}}}</td>
							<td>{{{$phieu_dang_ky->time_end}}}</td>
							<td>{{{$phieu_dang_ky->trang_thai}}}</td>
							<td>{{{$phieu_dang_ky->ghi_chu}}}</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop