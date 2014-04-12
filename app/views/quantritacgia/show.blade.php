@extends('layouts.admin')

@section('main')

<div class="col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-user"></i>Tác Giả</h2>
        </div>
        <div class="box-content">
            <p>{{ link_to_route('tac_gias.index', 'Trở về trang danh sách',null,array('class'=>'btn btn-primary')) }}</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Mã Tác Giả</th>
                        <th>Họ Tên</th>
                        <th>Ghi Chú</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{{ $tac_gia->ma_tac_gia }}}</td>
                        <td>{{{ $tac_gia->ho_ten }}}</td>
                        <td>{{{ $tac_gia->ghi_chu }}}</td>
                        <td>{{ link_to_route('tac_gias.edit', 'Chỉnh Sửa', array($tac_gia->id), array('class' => 'btn btn-info')) }}</td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('tac_gias.destroy', $tac_gia->id))) }}
                            {{ Form::submit('Xoá    ', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
