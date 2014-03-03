@extends('layouts.scaffold')

@section('main')

<h1>All Phieu_dang_kies</h1>

<p>{{ link_to_route('phieu_dang_kies.create', 'Add new phieu_dang_ky') }}</p>

@if ($phieu_dang_kies->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_phieu_dang_ky</th>
				<th>Trang_thai_phieu</th>
				<th>Ghi_chu</th>
				<th>TaiKhoans_Id</th>
				<th>HoiThis_Is</th>
				<th>Hoi_DanhMucNamsId</th>
				<th>HoiThis_DanhMucHoiThisId</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($phieu_dang_kies as $phieu_dang_ky)
				<tr>
					<td>{{{ $phieu_dang_ky->ma_phieu_dang_ky }}}</td>
					<td>{{{ $phieu_dang_ky->trang_thai_phieu }}}</td>
					<td>{{{ $phieu_dang_ky->ghi_chu }}}</td>
					<td>{{{ $phieu_dang_ky->TaiKhoans_Id }}}</td>
					<td>{{{ $phieu_dang_ky->HoiThis_Is }}}</td>
					<td>{{{ $phieu_dang_ky->Hoi_DanhMucNamsId }}}</td>
					<td>{{{ $phieu_dang_ky->HoiThis_DanhMucHoiThisId }}}</td>
                    <td>{{ link_to_route('phieu_dang_kies.edit', 'Edit', array($phieu_dang_ky->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('phieu_dang_kies.destroy', $phieu_dang_ky->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no phieu_dang_kies
@endif

@stop
