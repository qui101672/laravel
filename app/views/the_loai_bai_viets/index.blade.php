@extends('layouts.admin')

@section('main')
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Danh Sách Thể Loại Bài Viết</h2>

    </div>
    <div class="box-content">


@if ($the_loai_bai_viets->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Mã Thể Loại Bài Viết</th>
				<th>Thể Loại Bài Viết</th>
				<th>Ghi Chú</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($the_loai_bai_viets as $the_loai_bai_viet)
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
			@endforeach
		</tbody>
	</table>

	{{ link_to_route('the_loai_bai_viets.create', 'Tạo Thể Loại Bài Viết',array() ,array('class' => 'btn btn-info'))}}

@else
	There are no the_loai_bai_viets
@endif
	</div>
</div>
@stop
