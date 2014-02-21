@extends('layouts.admin')

@section('main')
<div class="col-lg-12">
<div class="box">
    <div class="box-header">
       <h2><i class="icon-user"> </i>Danh Sách Tài Khoản</h2>

    </div>
    <div class="box-content">

			@if ($tai_khoan->count())
				<table class="table table-striped table-bordered bootstrap-datatable">
					<thead>
						<tr>
							<td>Username</td>
							<td>Password</td>
							<td colspan="2">Quyền</td>
						</tr>
					</thead>

					<tbody>
						@foreach ($tai_khoan as $tai_khoan)
							<tr>
								<td>{{{ $tai_khoan->username }}}</td>
								<td>*******************</td>
								<?php 
									$quyen =  DB::table('phan_quyens')->where('id', $tai_khoan->PhanQuyen_Id)->first();
									//$quyen = Phan_quyen::find($tai_khoan->PhanQuyen_Id);
									echo '<td>'.$quyen->ten_quyen.'</td>';
								?>
								
			                    <td>{{ link_to_route('tai_khoan.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				There are no tai_khoans
			@endif
			<p>{{ link_to_route('tai_khoan.create', 'Tạo Tài Khoản',array(),array('class'=>'btn btn-primary')) }}</p>
	</div>
</div>
</div>
@stop
