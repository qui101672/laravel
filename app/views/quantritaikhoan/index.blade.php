@extends('layouts.admin')

@section('main')
<div class="col-lg-12">
<div class="box">
    <div class="box-header">
       <h2><i class="icon-user"> </i>Danh Sách Tài Khoản</h2>

    </div>
    <div class="box-content">
			<p>{{ link_to_route('tai_khoan.create', 'Tạo Tài Khoản',array(),array('class'=>'btn btn-primary')) }}</p>
			@if ($tai_khoan->count())
				
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						  <tr>
							  	<th>Tài Khoản</th>
								<th>Quyền</th>
								<th>Ghi Chú</th>   
								<th>Chỉnh Sửa</th>                                      
						  </tr>
				  	</thead>   
				  	<tbody>
				  	 @foreach ($tai_khoan as $tai_khoan)
							<tr>
								<td>{{{ $tai_khoan->username }}}</td>
								<?php 
									// $quyen =  DB::table('phan_quyens')->where('id', $tai_khoan->PhanQuyen_Id)->first();
									// echo '<td>'.$quyen->ten_quyen.'</td>';
									$quyen = new Phan_quyen();
									$ten_quyen = $quyen->getTen_Quyen($tai_khoan->PhanQuyen_Id);
									echo '<td>'.$ten_quyen.'</td>';
								?>
								<td>{{{$tai_khoan->ghi_chu}}}</td>
			                    <td>{{ link_to_route('tai_khoan.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
							</tr>
						@endforeach
				 	</tbody>
			  	</table>   
			@else
				There are no tai_khoans
			@endif
			
	</div>
</div>
</div>

			 
@stop
 