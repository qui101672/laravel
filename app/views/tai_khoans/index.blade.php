@extends('layouts.admin')

@section('main')
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-user"> </i>Danh Sách Tài Khoản</h2>

    </div>
    <div class="box-content">

			@if ($tai_khoans->count())
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th>Quyền</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($tai_khoans as $tai_khoan)
							<tr>
								<td>{{{ $tai_khoan->username }}}</td>
								<td>{{{ $tai_khoan->password }}}</td>
								<?php 
									$quyen = DB::table('phan_quyens')->where('id',$tai_khoan->PhanQuyen_Id)->first();
									echo '<td>'.$quyen->ten_quyen.'</td>';
								?>
								
			                    <td>{{ link_to_route('tai_khoans.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
			                    <td>
			                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tai_khoans.destroy', $tai_khoan->id))) }}
			                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
			                        {{ Form::close() }}
			                    </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				There are no tai_khoans
			@endif
			<p>{{ link_to_route('tai_khoans.create', 'Tạo Tài Khoản',array(),array('class'=>'btn btn-primary')) }}</p>
	</div>
</div>
@stop
