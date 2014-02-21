@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="box">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Danh Sách Ngành</h2>
    </div>
    <div class="box-content">
    <p>{{ link_to_route('nganh.create', 'Add new nganh') }}</p>

@if ($nganhs->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Ma_nganh</td>
				<td>Ten_nganh</td>
				<td>DonVis_Id</td>
				<td colspan="3">Ghi_chu</td>
			</tr>
		</thead>

		<tbody>
			@foreach ($nganhs as $nganh)
				<tr>
					<td>{{{ $nganh->ma_nganh }}}</td>
					<td>{{{ $nganh->ten_nganh }}}</td>
					<td>{{{ $nganh->DonVis_Id }}}</td>
					<td>{{{ $nganh->ghi_chu }}}</td>
                    <td>{{ link_to_route('nganh.edit', 'Edit', array($nganh->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('nganh.destroy', $nganh->id))) }}
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
	</div>
</div>
</div>
 



@stop
