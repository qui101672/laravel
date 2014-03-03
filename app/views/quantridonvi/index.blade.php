@extends('layouts.admin')

@section('main')
<div class="box">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Danh Sách Đơn Vị</span>
        </h2>
    </div>
    <div class="box-content">
        @if ($don_vis->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Mã Đơn Vị</td>
                    <td>Tên Đơn Vị</td>
                    <td colspan="3">Ghi Chú</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($don_vis as $don_vi)
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
                @endforeach
            </tbody>
        </table>
        <p>{{ link_to_route('don_vi.create', 'Add new don_vi') }}</p>

        @else
        There are no don_vis
        @endif
    </div>
</div>




@stop
