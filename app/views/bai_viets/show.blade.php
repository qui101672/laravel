@extends('layouts.scaffold')

@section('main')

<h1>Show Bai_viet</h1>

<p>{{ link_to_route('bai_viets.index', 'Return to all bai_viets') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_bai_viet</th>
				<th>Ten_bai_viet</th>
				<th>Noi_dung_bai_viet</th>
				<th>Id_nguoi_sua</th>
				<th>Id_ma_the_loai_bv</th>
				<th>Id_nguoi_tao</th>
				<th>Tag</th>
				<th>Ghi_chu</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $bai_viet->ma_bai_viet }}}</td>
					<td>{{{ $bai_viet->ten_bai_viet }}}</td>
					<td>{{{ $bai_viet->noi_dung_bai_viet }}}</td>
					<td>{{{ $bai_viet->id_nguoi_sua }}}</td>
					<td>{{{ $bai_viet->id_ma_the_loai_bv }}}</td>
					<td>{{{ $bai_viet->id_nguoi_tao }}}</td>
					<td>{{{ $bai_viet->tag }}}</td>
					<td>{{{ $bai_viet->ghi_chu }}}</td>
                    <td>{{ link_to_route('bai_viets.edit', 'Edit', array($bai_viet->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_viets.destroy', $bai_viet->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
