@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Danh Mục Hội Thi</h2>
            </div>
            <div class="box-content">
                <p>{{ link_to_route('danh_muc_nams.create', 'Thêm Danh Mục Năm',null,array('class'=>'btn btn-primary')) }}</p>
                
                @if ($danh_muc_nams->count())
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
                    <thead>
                        <tr>
                            <th>Năm</th>
                            <th>Ghi Chú</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($danh_muc_nams as $danh_muc_nam)
                        <tr>
                            <td>{{{ $danh_muc_nam->nam }}}</td>
                            <td>{{{ $danh_muc_nam->ghi_chu }}}</td>
                            <td>{{ link_to_route('danh_muc_nams.edit', 'Chỉnh Sửa', array($danh_muc_nam->id), array('class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('danh_muc_nams.destroy', $danh_muc_nam->id))) }}
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
</div>
@else
There are no danh_muc_hoi_this
@endif

@stop
