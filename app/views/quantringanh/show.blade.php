@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="box">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Chi Tiết Ngành</h2>
    </div>
    <div class="box-content">
<p>{{ link_to_route('nganh.index', 'Return to all nganhs') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Mã Ngành</td>
				<td>Tên Ngành</td>
				<td>Đơn Vị</td>
				<td colspan="3">Ghi Chú</td>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $nganh->ma_nganh }}}</td>
					<td>{{{ $nganh->ten_nganh }}}</td>
					<?php 
						$donvi = Don_vi::find($nganh->DonVis_Id);
						echo '<td>'.$donvi->ten_don_vi.'</td>';
					?>
					<td>{{{ $nganh->ghi_chu }}}</td>
                    <td>{{ link_to_route('nganh.edit', 'Edit', array($nganh->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('nganh.destroy', $nganh->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>
	</div>
</div>
</div>
@stop
