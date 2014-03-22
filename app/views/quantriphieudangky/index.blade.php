@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">
 
@if($hoi_this)
@foreach ($hoi_this as $hoi_this)  
		<div class="box">
			<div class="box-header">
				<h2><i class="icon-edit"> </i> {{{$hoi_this->ten_chuong_trinh}}}</h2>
			</div>
			<div class="box-content">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>Mã Phiếu Đăng Ký</td>
						<td>Tài Khoản Đăng Ký</td>
						<td>Trạng Thái Phiếu</td>
						<td>Ghi Chú</td>
					</tr>
				</thead>
				
					@foreach ($phieu_dang_kies[$hoi_this->id] as  $value) 
						<tr>
							<td>{{{$value->ma_phieu_dang_ky}}}</td>
						 	<td>{{{$value->username}}}</td>
						 	<td>{{{$value->trang_thai}}}</td>
						 	<td>{{{$value->ghi_chu}}}</td>
						 	<td>{{ link_to_route('phieu_dang_kies.show', 'Chi Tiết', $value->id, array('class' => 'btn btn-primary')) }}</td>
						 	<td>{{ link_to_route('phieu_dang_kies.edit', 'Edit', array($value->id), array('class' => 'btn btn-info')) }}</td>
						 	<td>{{ Form::open(array('method' => 'DELETE', 'route' => array('phieu_dang_kies.destroy', $value->id))) }}
		                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		                        {{ Form::close() }}
						 	</td>
						 </tr>
					@endforeach
				</table>
			</div>
		</div>

@endforeach
 @else
			There are no hoi_this
		@endif

	</div>
</div>




@stop


