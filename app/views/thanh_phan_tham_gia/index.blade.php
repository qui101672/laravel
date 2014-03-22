@extends('layouts.scaffold')

@section('main')

<h1>All Thanh_phan_tham_gia</h1>

<p>{{ link_to_route('thanh_phan_tham_gia.create', 'Add new thanh_phan_tham_gium') }}</p>

@if ($thanh_phan_tham_gia->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>TaiKhoans_Id</th>
				<th>TietMucDuThis_Id</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($thanh_phan_tham_gia as $thanh_phan_tham_gium)
				<tr>
					<td>{{{ $thanh_phan_tham_gium->TaiKhoans_Id }}}</td>
					<td>{{{ $thanh_phan_tham_gium->TietMucDuThis_Id }}}</td>
					<td>{{{ $thanh_phan_tham_gium->ghi_chu }}}</td>
                    <td>{{ link_to_route('thanh_phan_tham_gia.edit', 'Edit', array($thanh_phan_tham_gium->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('thanh_phan_tham_gia.destroy', $thanh_phan_tham_gium->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no thanh_phan_tham_gia
@endif

@stop
