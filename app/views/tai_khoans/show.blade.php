@extends('layouts.scaffold')

@section('main')

<h1>Show Tai_khoan</h1>

<p>{{ link_to_route('tai_khoans.index', 'Return to all tai_khoans') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Username</th>
				<th>Password</th>
				<th>Ma_quyen</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tai_khoan->username }}}</td>
					<td>{{{ $tai_khoan->password }}}</td>
					<td>{{{ $tai_khoan->ma_quyen }}}</td>
                    <td>{{ link_to_route('tai_khoans.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tai_khoans.destroy', $tai_khoan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
