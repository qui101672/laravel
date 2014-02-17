@extends('layouts.admin')

@section('main')

<h1>Show Nganh</h1>

<p>{{ link_to_route('nganhs.index', 'Return to all nganhs') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_nganh</th>
				<th>Ten_nganh</th>
				<th>DonVis_Id</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $nganh->ma_nganh }}}</td>
					<td>{{{ $nganh->ten_nganh }}}</td>
					<td>{{{ $nganh->DonVis_Id }}}</td>
					<td>{{{ $nganh->ghi_chu }}}</td>
                    <td>{{ link_to_route('nganhs.edit', 'Edit', array($nganh->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('nganhs.destroy', $nganh->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
