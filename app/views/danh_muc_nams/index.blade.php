@extends('layouts.scaffold')

@section('main')

<h1>All Danh_muc_nams</h1>

<p>{{ link_to_route('danh_muc_nams.create', 'Add new danh_muc_nam') }}</p>

@if ($danh_muc_nams->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Nam</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($danh_muc_nams as $danh_muc_nam)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no danh_muc_nams
@endif

@stop
