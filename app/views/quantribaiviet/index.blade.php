@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Danh Sách Bài Viết</h2>
        </div>
        <div class="box-content">
            @if ($bai_viet->count())
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Mã Bài Viết</td>
                        <td>Tiêu Đề</td>
                        <td>Nội Dung</td>
                        <td colspan="3">Ghi Chú</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($bai_viet as $bai_viet)
                    <tr>
                        <td>{{{ $bai_viet->ma_bai_viet }}}</td>
                        <td>{{{ $bai_viet->tieu_de_bai_viet }}}</td>
                        <td>{{{ strip_tags($bai_viet->noi_dung_bai_viet) }}}</td>
                        <td>{{{ $bai_viet->ghi_chu }}}</td>
                        <td>{{ link_to_route('bai_viet.edit', 'Edit', array($bai_viet->id), array('class' => 'btn btn-info')) }}
                        </td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('bai_viet.destroy', $bai_viet->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ link_to_route('bai_viet.create', 'Tạo Bài Viết',array() ,array('class' => 'btn btn-info'))}}

            @else
            There are no the_loai_bai_viets
            @endif
        </div>
    </div>
</div>

@stop
