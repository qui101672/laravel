@extends('layouts.scaffold')
@section('main')

    <table class="table table-striped">
        <tbody>
            <tr>
            <td colspan="2"><center><h2>Thông Tin Sinh Viên</h2></center></td>
        </tr>
        <?php 
        foreach ($info_user as $info_user){
        ?>
        <tr>
            <td>Mã Số Sinh Viên</td>
            <td>{{{ $info_user->mssv }}}</td>
        </tr>
            <tr>
            <td>Họ Tên</td>
            <td>{{{ $info_user->ho_ten }}}</td>
        </tr>
            <tr>
            <td>Lớp</td>
                <td>
                <?php
                $lop = Lop::find($info_user->Lops_Id);
                echo $lop->ten_lop;
                ?>
            </td>
        </tr>
        
            <tr>
            <td>Giới Tính</td>
            <td>{{{ $info_user->gioi_tinh }}}</td>
        </tr>
            <tr>
            <td>Ngày Sinh</td>
            <td>{{{ $info_user->ngay_sinh }}}</td>
        </tr>
            <tr>
            <td>Địa Chỉ</td>
            <td>{{{ $info_user->dia_chi }}}</td>
        </tr>
            <tr>
            <td>Quê Quán</td>
            <td>{{{ $info_user->que_quan }}}</td>
        </tr>
            <tr>
            <td>Email</td>
            <td>{{{ $info_user->email }}}</td>
        </tr>
            <tr>
            <td>Số Điện Thoại</td>
            <td>{{{ $info_user->sdt }}}</td>
        </tr>
        <?php 
    }?>
            <tr>
                <td colspan="2">
                {{ link_to_route('thong_tin.edit', 'Chỉnh Sửa Thông Tin', array($info_user->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
    </tbody>
</table>

@stop
@stop