@extends('layouts.admin')

@section('main')
<div class="box span12">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Đơn Vị</span>
        </h2>
    </div>
    <div class="box-content">
        <p>{{ link_to_route('don_vi.index', 'Return to all don_vis') }}</p>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Mã Đơn Vị</td>
                    <td>Tên Đơn Vị</td>
                    <td colspan="3">Ghi Chú</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{{ $don_vi->ma_don_vi }}}</td>
                    <td>{{{ $don_vi->ten_don_vi }}}</td>
                    <td>{{{ $don_vi->ghi_chu }}}</td>
                    <td>{{ link_to_route('don_vi.edit', 'Edit', array($don_vi->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('don_vi.destroy', $don_vi->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
