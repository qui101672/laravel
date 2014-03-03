@extends('layouts.admin')

@section('main')

<h1>Show Bai_hat</h1>

<p>{{ link_to_route('bai_hats.index', 'Return to all bai_hats') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_bai_hat</th>
				<th>Ten_bai_hat</th>
				<th>Nam_sang_tac</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $bai_hat->ma_bai_hat }}}</td>
					<td>{{{ $bai_hat->ten_bai_hat }}}</td>
					<td>{{{ $bai_hat->nam_sang_tac }}}</td>
					<td>{{{ $bai_hat->ghi_chu }}}</td>
                    <td>{{ link_to_route('bai_hats.edit', 'Edit', array($bai_hat->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_hats.destroy', $bai_hat->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
