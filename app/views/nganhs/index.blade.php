@extends('layouts.admin')

@section('main')

<h1>All Nganhs</h1>

<p>{{ link_to_route('nganhs.create', 'Add new nganh') }}</p>

@if ($nganhs->count())
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
			@foreach ($nganhs as $nganh)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no nganhs
@endif

@stop
