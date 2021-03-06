@extends('layouts.scaffold')

@section('main')

<h1>All Giai_thuongs</h1>

<p>{{ link_to_route('giai_thuongs.create', 'Add new giai_thuong') }}</p>

@if ($giai_thuongs->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_giai_thuong</th>
				<th>Ten_gai_thuong</th>
				<th>So_luong</th>
				<th>So_tien</th>
				<th>Ghi_chu</th>
				<th>HinhThucDuThis_Id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($giai_thuongs as $giai_thuong)
				<tr>
					<td>{{{ $giai_thuong->ma_giai_thuong }}}</td>
					<td>{{{ $giai_thuong->ten_gai_thuong }}}</td>
					<td>{{{ $giai_thuong->so_luong }}}</td>
					<td>{{{ $giai_thuong->so_tien }}}</td>
					<td>{{{ $giai_thuong->ghi_chu }}}</td>
					<td>{{{ $giai_thuong->HinhThucDuThis_Id }}}</td>
                    <td>{{ link_to_route('giai_thuongs.edit', 'Edit', array($giai_thuong->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('giai_thuongs.destroy', $giai_thuong->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no giai_thuongs
@endif

@stop
