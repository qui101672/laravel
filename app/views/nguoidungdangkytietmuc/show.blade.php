@extends('layouts.admin')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"> </i>Danh Sách Tiết Mục</h2>
            </div>
            <div class="box-content">
                @if($ket_qua_vong_thi != null)
                    @foreach ($ket_qua_vong_thi as $ket_qua_vong_thi)
                        @if($ket_qua_vong_thi->ket_qua == 1)
                            {{ link_to_route('dang_ky_phieus.dangkytietmucvong', 'Đăng Ký Tiết Mục Mới', array($ket_qua_vong_thi->PhieuDangKys_Id,$ket_qua_vong_thi->HinhThucDuThis_Id,$ket_qua_vong_thi->VongThis_Id), array('class' => 'btn btn-info')) }}
                        @elseif ($ket_qua_vong_thi->ket_qua == 0 || $ket_qua_vong_thi->ket_qua == '' || $ket_qua_vong_thi->ket_qua == null)  
                        @endif
                    @endforeach
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Mã Tiết Mục</td>
                            <td>Tên Tiết Mục</td>
                            <td>Thể Loại Tiết Mục</td>
                            <td>Vòng Thi</td>
                            <td>Kết Quả</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $results)
                        <tr>
                            <td>{{{$results->ms_tiet_muc}}}</td>
                            <td>{{{$results->ten_tiet_muc}}}</td>
                            <td>{{{$results->the_loai_tiet_muc}}}</td>
                            <td>{{{$results->ten_vong_thi}}}</td>
                            <td>
                                <?php
                                if ($results->ket_qua == '1')
                                    echo 'Đạt';
                                elseif ($results->ket_qua == '0')
                                    echo 'Không Đạt';
                                else
                                    echo 'Chưa Có Kết Quả';
                                ?>

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