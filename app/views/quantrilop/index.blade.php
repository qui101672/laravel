@extends('layouts.admin')

@section('main')

<h1>All Lops</h1>

<p>{{ link_to_route('lop.create', 'Add new lop') }}</p>

@if ($lops->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_lop</th>
				<th>Ten_lop</th>
				<th>So_luong</th>
				<th>Khoa_hoc</th>
				<th>Nganhs_Id</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($lops as $lop)
				<tr>
					<td>{{{ $lop->ma_lop }}}</td>
					<td>{{{ $lop->ten_lop }}}</td>
					<td>{{{ $lop->so_luong }}}</td>
					<td>{{{ $lop->khoa_hoc }}}</td>
					<td>{{{ $lop->Nganhs_Id }}}</td>
					<td>{{{ $lop->ghi_chu }}}</td>
                    <td>{{ link_to_route('lop.edit', 'Edit', array($lop->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('lop.destroy', $lop->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no lops
@endif

@stop
