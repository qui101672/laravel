@extends('layouts.admin')

@section('main')

 
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">


<p>{{ link_to_route('the_loai_bai_viets.index', 'Return to all the_loai_bai_viets') }}</p>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Ma_the_loai_bai_viet</th>
				<th>Ten_the_loai_bai_viet</th>
				<th>Ghi_chu</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>{{{ $the_loai_bai_viet->ma_the_loai_bai_viet }}}</td>
						<td>{{{ $the_loai_bai_viet->ten_the_loai_bai_viet }}}</td>
						<td>{{{ $the_loai_bai_viet->ghi_chu }}}</td>
	                    <td>{{ link_to_route('the_loai_bai_viets.edit', 'Edit', array($the_loai_bai_viet->id), array('class' => 'btn btn-info')) }}</td>
	                    <td>
	                        {{ Form::open(array('method' => 'DELETE', 'route' => array('the_loai_bai_viets.destroy', $the_loai_bai_viet->id))) }}
	                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
	                        {{ Form::close() }}
	                    </td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
@stop
