@extends('layouts.scaffold')

@section('main')

<h1>Show Danh_muc_hoi_thi</h1>

<p>{{ link_to_route('danh_muc_hoi_this.index', 'Return to all danh_muc_hoi_this') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_hoi_thi</th>
				<th>Ten_hoi_thi</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $danh_muc_hoi_thi->ma_hoi_thi }}}</td>
					<td>{{{ $danh_muc_hoi_thi->ten_hoi_thi }}}</td>
					<td>{{{ $danh_muc_hoi_thi->ghi_chu }}}</td>
                    <td>{{ link_to_route('danh_muc_hoi_this.edit', 'Edit', array($danh_muc_hoi_thi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('danh_muc_hoi_this.destroy', $danh_muc_hoi_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
