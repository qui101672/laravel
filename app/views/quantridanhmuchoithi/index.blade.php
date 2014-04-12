@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Danh Mục Hội Thi</h2>
            </div>
            <div class="box-content">
                <p>{{ link_to_route('danh_muc_hoi_thi.create', 'Thêm Danh Mục Hội Thi',null,array('class'=>'btn btn-primary')) }}</p>
                @if ($danh_muc_hoi_this->count())
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
                    <thead>
                        <tr>
                            <th>Mã Hội Thi</th>
                            <th>Tên Hội Thi</th>
                            <th>Ghi Chú</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($danh_muc_hoi_this as $danh_muc_hoi_thi)
                        <tr>
                            <td>{{{ $danh_muc_hoi_thi->ma_hoi_thi }}}</td>
                            <td>{{{ $danh_muc_hoi_thi->ten_hoi_thi }}}</td>
                            <td>{{{ $danh_muc_hoi_thi->ghi_chu }}}</td>
                            <td>{{ link_to_route('danh_muc_hoi_thi.edit', 'Chỉnh Sửa', array($danh_muc_hoi_thi->id), array('class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('danh_muc_hoi_thi.destroy', $danh_muc_hoi_thi->id))) }}
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
@else
There are no danh_muc_hoi_this
@endif

@stop
