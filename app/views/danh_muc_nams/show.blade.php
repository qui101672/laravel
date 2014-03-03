@extends('layouts.scaffold')

@section('main')

<h1>Show Danh_muc_nam</h1>

<p>{{ link_to_route('danh_muc_nams.index', 'Return to all danh_muc_nams') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nam</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $danh_muc_nam->nam }}}</td>
					<td>{{{ $danh_muc_nam->ghi_chu }}}</td>
                    <td>{{ link_to_route('danh_muc_nams.edit', 'Edit', array($danh_muc_nam->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('danh_muc_nams.destroy', $danh_muc_nam->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
