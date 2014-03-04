@extends('layouts.admin')

@section('main')
 


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Chi Tiết Hội Thi</h2>
        </div>
        <div class="box-content">

         <p>{{ link_to_route('hoi_this.create', 'Add new hoi_thi') }}</p>
@if ($hoi_this->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ten_chuong_trinh</th>
				<th>Time_start</th>
				<th>Time_end</th>
				<th>DanhMucNams_Id</th>
				<th>DanhMucHoiThis_Id</th>
				<th colspan="3">Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($hoi_this as $hoi_thi)
				<tr>
					<td>{{{ $hoi_thi->ten_chuong_trinh }}}</td>
					<td>{{{ $hoi_thi->time_start }}}</td>
					<td>{{{ $hoi_thi->time_end }}}</td>
					<td>{{{ $hoi_thi->DanhMucNams_Id }}}</td>
					<td>{{{ $hoi_thi->DanhMucHoiThis_Id }}}</td>
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
