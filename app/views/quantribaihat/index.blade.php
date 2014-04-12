@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Danh Sách Bài Viết</h2>
        </div>
        <div class="box-content">
            <p>{{ link_to_route('bai_hats.create', 'Thêm Bài Hát',null, array('class' => 'btn btn-primary')) }}</p>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Mã Bài Hát</th>
                        <th>Tên bài Hát</th>
                        <th>Tác Giả</th>
                        <th>Năm Sáng Tác</th>
                        <th>Ghi Chú</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($bai_hats as $bai_hat)
                    <tr>
                        <td>{{{ $bai_hat->ma_bai_hat }}}</td>
                        <td>{{{ $bai_hat->ten_bai_hat }}}</td>
                        <td>{{{ $bai_hat->ho_ten }}}</td>
                        <td>{{{ $bai_hat->nam_sang_tac }}}</td>
                        <td>{{{ $bai_hat->ghi_chu }}}</td>
                        <td>{{ link_to_route('bai_hats.edit', 'Sửa', array($bai_hat->id), array('class' => 'btn btn-info')) }}</td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_hats.destroy', $bai_hat->id))) }}
                            {{ Form::submit('Xoá', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
