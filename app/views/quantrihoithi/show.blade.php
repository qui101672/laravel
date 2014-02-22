@extends('layouts.scaffold')

@section('main')

<h1>Show Hoi_thi</h1>

<p>{{ link_to_route('hoi_this.index', 'Return to all hoi_this') }}</p>

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

@stop