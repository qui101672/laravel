@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">
		<div class="box">
			<div class="box-header">
				<h2><i class="icon-edit"> </i> Chi Tiết Phiếu Đăng Ký</h2>
			</div>
			<div class="box-content">
				<table class="table table-hover">
						<thead>
							<tr>
								<td>Mã Số Tiết Mục</td>
								<td>Tên Tiết Mục</td>
								<td>Trình Bày</td>
								<td>Thể Loại Tiết Mục</td>
								<td>Hình Thức</td>
								<td>Vòng Thi</td>
								<td>Ghi Chú</td>
							</tr>
						</thead>
				<tbody>
				@foreach ($tiet_muc as $tiet_muc)  
							<tr>
								<td>{{{$tiet_muc->ms_tiet_muc}}}</td>
								<td>{{{$tiet_muc->ten_tiet_muc}}}</td>
								<td>{{{$tiet_muc->trinh_bay}}}</td>
								<td>{{{$tiet_muc->the_loai_tiet_muc}}}</td>
								<td>{{{$tiet_muc->ten_hinh_thuc}}}</td>
								<td>{{{$tiet_muc->ten_vong_thi}}}</td>
								<td>{{{$tiet_muc->ghi_chu}}}</td>
								<td>{{ link_to_route('tiet_muc_du_this.edit', 'Edit', array($tiet_muc->id), array('class' => 'btn btn-info')) }}</td>
			                    <td>
			                        {{ Form::open(array('method' => 'DELETE', 'route' => array('phieu_dang_kies.destroy', $phieu_dang_ky->id))) }}
			                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
			                        {{ Form::close() }}
			                    </td>
							</tr>
				@endforeach
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

 @stop