@extends('layouts.admin')

@section('main')
 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="box">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Danh Sách Lớp</h2>
    </div>
    <div class="box-content">
    <p>{{ link_to_route('lop.index', 'Return to all lops') }}</p>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Mã Lớp</td>
					<td>Tên Lớp</td>
					<td>Số SV</td>
					<td>Khóa Học</td>
					<td>Ngành Học</td>
					<td colspan="3">Ghi Chú</td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{{ $lop->ma_lop }}}</td>
							<td>{{{ $lop->ten_lop }}}</td>
							<td>{{{ $lop->so_luong }}}</td>
							<td>{{{ $lop->khoa_hoc }}}</td>
							<?php 
								$nganh = Nganh::find($lop->Nganhs_Id);
								echo '<td>'.$nganh->ten_nganh.'</td>';
								?>
							<td>{{{ $lop->ghi_chu }}}</td>
		                    <td>{{ link_to_route('lop.edit', 'Edit', array($lop->id), array('class' => 'btn btn-info')) }}</td>
		                    <td>
		                        {{ Form::open(array('method' => 'DELETE', 'route' => array('lop.destroy', $lop->id))) }}
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
