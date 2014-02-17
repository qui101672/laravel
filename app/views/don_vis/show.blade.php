@extends('layouts.admin')

@section('main')

<h1>Show Don_vi</h1>

<p>{{ link_to_route('don_vis.index', 'Return to all don_vis') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_don_vi</th>
				<th>Ten_don_vi</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $don_vi->ma_don_vi }}}</td>
					<td>{{{ $don_vi->ten_don_vi }}}</td>
					<td>{{{ $don_vi->ghi_chu }}}</td>
                    <td>{{ link_to_route('don_vis.edit', 'Edit', array($don_vi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('don_vis.destroy', $don_vi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
