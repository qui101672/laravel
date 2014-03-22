@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Chi Tiết Hội Thi</h2>
        </div>
        <div class="box-content">
        <p>{{ link_to_route('hoi_this.create', 'Tạo Hội Thi',array(),array('class'=>'btn btn-primary')) }}</p>
		@if ($hoi_this->count())
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
            	<thead>
					<tr>
						<th>Tên Chương Trình</th>
						<th>Thời Gian Bắt Đầu</th>
						<th>Thời  Gian Kết Thúc</th>
						<th>Ghi Chú</th>
						<th>Chi Tiết</th>
                    	<th>Xóa</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($hoi_this as $hoi_thi)
						<tr>
							<td>{{{ $hoi_thi->ten_chuong_trinh }}}</td>
							<td>{{{ $hoi_thi->time_start }}}</td>
							<td>{{{ $hoi_thi->time_end }}}</td>
							<td>{{{ $hoi_thi->ghi_chu }}}</td>
		                    <td>{{ link_to_route('hoi_this.show', 'Chi Tiết', $hoi_thi->id, array('class' => 'btn btn-primary')) }}</td>
		                    <td>
		                        {{ Form::open(array('method' => 'DELETE', 'route' => array('hoi_this.destroy', $hoi_thi->id))) }}
		                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		                        {{ Form::close() }}
		                    </td>
						</tr>
					@endforeach
				</tbody>
			</table>
				@else
			There are no hoi_this
		@endif
		</div>
	</div>
</div>
@stop
