@extends('layouts.admin')

@section('main')

<p>{{ link_to_route('bai_hats.index', 'Return to all bai_hats') }}</p>
<div class="box">
    <div class="box-header">
        <h2><i class="icon-edit"></i>Chi Tiết Bài Hát</h2>
    </div>
    <div class="box-content">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Mã Bài Hát</th>
                    <th>Tên bài Hát</th>
                    <th>Năm Sáng Tác</th>
                    <th>Ghi Chú</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{{ $bai_hat->ma_bai_hat }}}</td>
                    <td>{{{ $bai_hat->ten_bai_hat }}}</td>
                    <td>{{{ $bai_hat->nam_sang_tac }}}</td>
                    <td>{{{ $bai_hat->ghi_chu }}}</td>
                    <td>{{ link_to_route('bai_hats.edit', 'Edit', array($bai_hat->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_hats.destroy', $bai_hat->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@stop
