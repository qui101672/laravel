@extends('layouts.scaffold')

@section('main')

<h1>All Tai_khoans</h1>

<p>{{ link_to_route('tai_khoans.create', 'Add new tai_khoan') }}</p>

@if ($tai_khoans->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Ma_quyen</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tai_khoans as $tai_khoan)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no tai_khoans
@endif

@stop
