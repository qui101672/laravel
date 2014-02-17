@extends('layouts.admin')

@section('main')
<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-edit"> </i>Danh Sách Bài Viết</h2>

    </div>
    <div class="box-content">


@if ($bai_viets->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Mã Bài Viết</th>
				<th>Tiêu Đề</th>
				<th>Nội Dung</th>
				<th>Ghi Chú</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($bai_viets as $bai_viet)
				<tr>
					<td>{{{ $bai_viet->ma_bai_viet }}}</td>
					<td>{{{ $bai_viet->tieu_de_bai_viet }}}</td>
					<td>{{{ $bai_viet->noi_dung_bai_viet }}}</td>
					<td>{{{ $bai_viet->ghi_chu }}}</td>
                    <td>{{ link_to_route('bai_viets.edit', 'Edit', array($bai_viet->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_viets.destroy', $bai_viet->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ link_to_route('bai_viets.create', 'Tạo Bài Viết',array() ,array('class' => 'btn btn-info'))}}

@else
	There are no the_loai_bai_viets
@endif
	</div>
</div>
@stop
