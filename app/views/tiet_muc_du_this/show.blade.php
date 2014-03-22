@extends('layouts.scaffold')

@section('main')

<h1>Show Tiet_muc_du_thi</h1>

<p>{{ link_to_route('tiet_muc_du_this.index', 'Return to all tiet_muc_du_this') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ms_tiet_muc</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tiet_muc_du_thi->ms_tiet_muc }}}</td>
                    <td>{{ link_to_route('tiet_muc_du_this.edit', 'Edit', array($tiet_muc_du_thi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tiet_muc_du_this.destroy', $tiet_muc_du_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
