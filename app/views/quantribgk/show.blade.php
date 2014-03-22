@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Ban Giám Khảo</h2>
    </div>
    <div class="box-content">
<p>{{ link_to_route('ban_giam_khaos.index', 'Return to all thanh_vien_bgks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Ma_thanh_vien</th>
				<th>Ho_ten</th>
				<th>Vi_tri</th>
				<th>Ghi_chu</th>
				<th>HoiThis_Id</th>
				<th>TaiKhoans_Id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $thanh_vien_bgk->ma_thanh_vien }}}</td>
					<td>{{{ $thanh_vien_bgk->ho_ten }}}</td>
					<td>{{{ $thanh_vien_bgk->vi_tri }}}</td>
					<td>{{{ $thanh_vien_bgk->ghi_chu }}}</td>
					<td>{{{ $thanh_vien_bgk->HoiThis_Id }}}</td>
					<td>{{{ $thanh_vien_bgk->TaiKhoans_Id }}}</td>
                    <td>{{ link_to_route('ban_giam_khaos.edit', 'Edit', array($thanh_vien_bgk->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('ban_giam_khaos.destroy', $thanh_vien_bgk->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>
</div>
</div>
</div>
</div>
@stop
