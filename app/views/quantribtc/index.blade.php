@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Ban Tổ Chức</h2>
            </div>
            <div class="box-content">
                <p>{{ link_to_route('ban_to_chuc.create', 'Thêm Ban Tổ Chức',null, array('class'=>'btn btn-primary')) }}</p>
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Họ Tên</th>
                            <th>Tên Chương Trình</th>
                            <th>Vị Trí</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ds_btcs as $ds_btcs)
                        <tr>
                            <td>{{{ $ds_btcs->ho_ten }}}</td>
                            <td>{{{ $ds_btcs->ten_chuong_trinh }}}</td>
                            <td>{{{ $ds_btcs->vi_tri_btcs }}}</td>
                            <td>{{ link_to_route('ban_to_chuc.edit', 'Edit', array($ds_btcs->id), array('class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('ban_to_chuc.destroy', $ds_btcs->id))) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@stop
