@extends('layouts.admin')

@section('main')

<h1>All Hoi_this</h1>

<p>{{ link_to_route('hoi_this.create', 'Add new hoi_thi') }}</p>

@if ($hoi_this->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ten_chuong_trinh</th>
				<th>Time_start</th>
				<th>Time_end</th>
				<th>DanhMucNams_Id</th>
				<th>DanhMucHoiThis_Id</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($hoi_this as $hoi_thi)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no hoi_this
@endif

@stop
