@extends('layouts.scaffold')

@section('main')

<h1>All Tac_gia</h1>

<p>{{ link_to_route('tac_gia.create', 'Add new tac_gium') }}</p>

@if ($tac_gia->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_tac_gia</th>
				<th>Ho_ten</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tac_gia as $tac_gium)
				<tr>
					<td>{{{ $tac_gium->ma_tac_gia }}}</td>
					<td>{{{ $tac_gium->ho_ten }}}</td>
					<td>{{{ $tac_gium->ghi_chu }}}</td>
                    <td>{{ link_to_route('tac_gia.edit', 'Edit', array($tac_gium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tac_gia.destroy', $tac_gium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no tac_gia
@endif

@stop
