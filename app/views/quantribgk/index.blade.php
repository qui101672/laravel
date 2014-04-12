@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Thành Viên Ban Giám Khảo</h2>
            </div>
            <div class="box-content">

                <p>{{ link_to_route('ban_giam_khaos.create', 'Thêm Thành Viên Ban Giám Khảo',null,array('class' => 'btn btn-info')) }}</p>

                @if ($thanh_vien_bgks->count())
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Mã Thành Viên</th>
                            <th>Họ Tên</th>
                            <th>Vị Trí</th>
                            <th>Hội Thi</th>
                            <th>Tài Khoản</th>
                            <th>Ghi Chú</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($thanh_vien_bgks as $thanh_vien_bgk)
                        <tr>
                            <td>{{{ $thanh_vien_bgk->ma_thanh_vien }}}</td>
                            <td>{{{ $thanh_vien_bgk->ho_ten }}}</td>
                            <td>{{{ $thanh_vien_bgk->vi_tri }}}</td>
                            <td>
                                <?php
                                   $hoi_thi = new Hoi_thi();
                                   $ten_chuong_trinh = $hoi_thi->get_tenchuongtrinh($thanh_vien_bgk->HoiThis_Id);
                                   echo $ten_chuong_trinh;
                                ?>
                                
                            </td>
                            <td>
                                <?php
                                   $tai_khoan = new Tai_khoan();
                                   $username = $tai_khoan->get_username($thanh_vien_bgk->TaiKhoans_Id);
                                   echo $username;
                                ?>
                                 
                            </td>
                            <td>{{{ $thanh_vien_bgk->ghi_chu }}}</td>
                            <td>{{ link_to_route('ban_giam_khaos.edit', 'Chỉnh Sửa', array($thanh_vien_bgk->id), array('class' => 'btn btn-info')) }}</td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('ban_giam_khaos.destroy', $thanh_vien_bgk->id))) }}
                                {{ Form::submit('Xoá', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                There are no thanh_vien_bgks
                @endif
            </div>
        </div>
    </div>
</div>
@stop
