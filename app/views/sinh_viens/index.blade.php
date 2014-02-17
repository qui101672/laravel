@extends('layouts.admin')

@section('main')

<div class="box span12">
	<div class="box-header">
		<h2><i class="icon-user"></i><span>Danh Sách Sinh Viên</span></h2>
	</div>
	<div class="box-content">
		<p>{{ link_to_route('sinh_viens.create', 'Add new sinh_vien') }}</p>

@if ($sinh_viens->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Mssv</th>
				<th>Ho_ten</th>
				<th>Gioi_tinh</th>
				<th>Ngay_sinh</th>
				<th>Dia_chi</th>
				<th>Email</th>
				<th>Sdt</th>
				<th>Lops_Id</th>
				<th>TaiKhoans_Id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($sinh_viens as $sinh_vien)
				<tr>
					<td>{{{ $sinh_vien->mssv }}}</td>
					<td>{{{ $sinh_vien->ho_ten }}}</td>
					<td>{{{ $sinh_vien->gioi_tinh }}}</td>
					<td>{{{ $sinh_vien->ngay_sinh }}}</td>
					<td>{{{ $sinh_vien->dia_chi }}}</td>
					<td>{{{ $sinh_vien->email }}}</td>
					<td>{{{ $sinh_vien->sdt }}}</td>
					<td>{{{ $sinh_vien->Lops_Id }}}</td>
					<td>{{{ $sinh_vien->TaiKhoans_Id }}}</td>
                    <td>{{ link_to_route('sinh_viens.edit', 'Edit', array($sinh_vien->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('sinh_viens.destroy', $sinh_vien->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no sinh_viens
@endif
	</div>
</div>



@stop
