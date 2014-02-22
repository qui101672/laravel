@extends('layouts.scaffold')

@section('main')

<h1>Show Hinh_thuc_du_thi</h1>

<p>{{ link_to_route('hinh_thuc_du_this.index', 'Return to all hinh_thuc_du_this') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_hinh_thuc</th>
				<th>Ten_hinh_thuc</th>
				<th>Noi_dung_hinh_thuc</th>
				<th>So_luong_yeu_cau</th>
				<th>So_vong_thi</th>
				<th>HoiThis_Id</th>
				<th>HoiThis_DanhMucsId</th>
				<th>HoiThis_DanhMucHoiThisId</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $hinh_thuc_du_thi->ma_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->ten_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->noi_dung_hinh_thuc }}}</td>
					<td>{{{ $hinh_thuc_du_thi->so_luong_yeu_cau }}}</td>
					<td>{{{ $hinh_thuc_du_thi->so_vong_thi }}}</td>
					<td>{{{ $hinh_thuc_du_thi->HoiThis_Id }}}</td>
					<td>{{{ $hinh_thuc_du_thi->HoiThis_DanhMucsId }}}</td>
					<td>{{{ $hinh_thuc_du_thi->HoiThis_DanhMucHoiThisId }}}</td>
					<td>{{{ $hinh_thuc_du_thi->ghi_chu }}}</td>
                    <td>{{ link_to_route('hinh_thuc_du_this.edit', 'Edit', array($hinh_thuc_du_thi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('hinh_thuc_du_this.destroy', $hinh_thuc_du_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
