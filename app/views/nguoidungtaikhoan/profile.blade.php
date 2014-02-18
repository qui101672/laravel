@extends('layouts.scaffold')

@section('main')
<table class="table table-striped">
	@if(Auth::user()->doi_tuong == 'Sinh Viên')
		<tbody>
			<tr>
				<td colspan="2"><center><h2>Thông Tin Sinh Viên</h2></center></td>
			</tr>
			<tr>
				<td>Mã Số Sinh Viên</td>
				<td>{{{ $info_user->mssv }}}</td>
			</tr>
			<tr>
				<td>Họ Tên</td>
				<td>{{{ $info_user->ho_ten }}}</td>
			</tr>
			<tr>
				<td>Giới Tính</td>
				<td>{{{ $info_user->gioi_tinh }}}</td>
			</tr>
			<tr>
				<td>Ngày Sinh</td>
				<td>{{{ $info_user->ngay_sinh }}}</td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td>{{{ $info_user->dia_chi }}}</td>
			</tr>
			<tr>
				<td>Quê Quán</td>
				<td>{{{ $info_user->que_quan }}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{{ $info_user->email }}}</td>
			</tr>
			<tr>
				<td>Số Điện Thoại</td>
				<td>{{{ $info_user->sdt }}}</td>
			</tr>
			<tr>
				<td>Lớp</td>
				<td>{{{ $info_user->Lops_Id }}}</td>
			</tr>
	 		<tr>
	 		<td>
	 		{{ link_to_route('thong_tin.edit', 'Edit', array($info_user->id), array('class' => 'btn btn-info')) }}
	        </td> 
	        </tr>
		</tbody>
	
	@else
		<tbody>
			<tr>
				<td colspan="2"><center><h2>Thông Tin Cán Bộ</h2></center></td>
			</tr>
			<tr>
				<td>Mã Số Cán Bộ</td>
				<td>{{{ $info_user->mscb }}}</td>
			</tr>
			<tr>
				<td>Họ Tên</td>
				<td>{{{ $info_user->ho_ten }}}</td>
			</tr>
			<tr>
				<td>Chức Vụ</td>
				<td>{{{ $info_user->chuc_vu }}}</td>
			</tr>
			<tr>
				<td>Giới Tính</td>
				<td>{{{ $info_user->gioi_tinh }}}</td>
			</tr>
			<tr>
				<td>Ngày Sinh</td>
				<td>{{{ $info_user->ngay_sinh }}}</td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td>{{{ $info_user->dia_chi }}}</td>
			</tr>
			<tr>
				<td>Quê Quán</td>
				<td>{{{ $info_user->que_quan }}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{{ $info_user->email }}}</td>
			</tr>
			<tr>
				<td>Số Điện Thoại</td>
				<td>{{{ $info_user->sdt }}}</td>
			</tr>
			<tr>
				<td>Đơn Vị</td>
				<td>{{{ $info_user->DonVis_Id }}}</td>
			</tr>
	 		<tr>
	 		<td>
	 		{{ link_to_route('thong_tin.edit', 'Edit', array($info_user->id), array('class' => 'btn btn-info')) }}
	        </td> 
	        </tr>
	 		 
		</tbody>
	
	@endif
</table>
@stop
@stop