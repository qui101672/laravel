@extends('layouts.admin')

@section('main')

<h1>All Vong_this</h1>

<p>{{ link_to_route('vong_this.create', 'Add new vong_thi') }}</p>

@if ($vong_this->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_vong_thi</th>
				<th>Ten_vong_thi</th>
				<th>HinhThucDuThis_Id</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($vong_this as $vong_thi)
				<tr>
					<td>{{{ $vong_thi->ma_vong_thi }}}</td>
					<td>{{{ $vong_thi->ten_vong_thi }}}</td>
					<td>{{{ $vong_thi->HinhThucDuThis_Id }}}</td>
					<td>{{{ $vong_thi->ghi_chu }}}</td>
                    <td>{{ link_to_route('vong_this.edit', 'Edit', array($vong_thi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('vong_this.destroy', $vong_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no vong_this
@endif

@stop
