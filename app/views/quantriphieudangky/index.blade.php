@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        @if($hoi_this)
        @foreach ($hoi_this as $hoi_this)  
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"> </i> {{{$hoi_this->ten_chuong_trinh}}}</h2>
            </div>
            <div class="box-content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Mã Phiếu Đăng Ký</td>
                            <td>Tài Khoản Đăng Ký</td>
                            <td>Trạng Thái Phiếu</td>
                            <td>Ghi Chú</td>
                        </tr>
                    </thead>

                    @foreach ($phieu_dang_kies[$hoi_this->id] as  $value) 
                    <tr>
                        <td>{{{$value->ma_phieu_dang_ky}}}</td>
                        <td>{{{$value->username}}}</td>
                        <td>
                            <div class='input-group'>
                                <select id="sl_duyet_phieu_{{{$value->id}}}" class='form-control'>
                                    <?php 
                                    if($value->trang_thai == '1'){
                                        echo "<option value=''>Chưa Duyệt</option>";
                                        echo "<option value='1' selected>Duyệt</option>";
                                        echo "<option value='0'>Không Đạt</option>";
                                    }elseif($value->trang_thai == '0'){
                                        echo "<option value=''>Chưa Duyệt</option>";
                                        echo "<option value='1'>Duyệt</option>";
                                        echo "<option value='0' selected>Không Đạt</option>";
                                    }else{
                                        echo "<option selected>Chưa Duyệt</option>";
                                        echo "<option value='1'>Duyệt</option>";
                                        echo "<option value='0' >Không Đạt</option>";
                                    }
                                    ?>
                                </select> 
                            </div>
                            <script>
                                $("#sl_duyet_phieu_{{{$value->id}}}").change(function add(event){
                                    set_phieu({{{$value->id}}},document.getElementById('sl_duyet_phieu_{{{$value->id}}}').value);
                                });
                            </script>
                        </td>
                        <td>{{{$value->ghi_chu}}}</td>

                        <td>{{ link_to_route('phieu_dang_kies.show', 'Chi Tiết', $value->id, array('class' => 'btn btn-primary')) }}</td>
                        <td>{{ Form::open(array('method' => 'DELETE', 'route' => array('phieu_dang_kies.destroy', $value->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        @endforeach
        @else
        There are no hoi_this
        @endif

    </div>
</div>
<script type="text/javascript">
    function set_phieu(id,trang_thai){
        $.ajax({
            url: 'trangthaiphieu',
            type: 'post',
            dataType: 'json',
            data: {id_phieu_dang_ky: id,
                    trang_thai: trang_thai},
        })
        .done(function() {
            var n = noty({text: 'Xét Duyệt Phiếu Thành Công!!!', type: 'success'});
            console.log("done");
        })
        .fail(function() {
            var n = noty({text: 'Xét Duyệt Phiếu Không Thành Công!!!', type: 'error'}); 
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
 
    }
</script>

@stop


