@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h2>
                    <i class="icon-user"></i><span>Trao Giải Thưởng</span>
                </h2>
            </div>
            <div class="box-content">
                {{Form::open(array('name'=>'form_search','id'=>'form_search'))}}
                <fieldset>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="control-label"><h2>Tên Chương Trình</h2></span>
                            <select name="tenchuongtrinh" id="tenchuongtrinh" class="form-control">
                                <?php
                                echo "<option value='null'>--- Chọn ---</option>";
                                $hoi_thi = new Hoi_thi();
                                $ds_hoithi = $hoi_thi->get_dshoithi();
                                foreach ($ds_hoithi as $ds_hoithi) {
                                    echo "<option value='" . $ds_hoithi->id . "'>" . $ds_hoithi->ten_chuong_trinh . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-3" id="sl_hinhthuc" hidden='true'>
                            <span class="control-label"><h2>Hình Thức</h2></span>
                            <select name="hinhthucduthi" id="hinhthucduthi" class="form-control">
                                <option value="null">--Chọn--</option>
                            </select>
                        </div>
                        <div class="col-md-3" id="sl_doiduthi" hidden='true'>
                            <span class="control-label"><h2>Đơn Vị Tham Gia</h2></span>
                            <select name="dvthamgia" id="dvthamgia" class="form-control">
                                <option value="null">--Chọn--</option>
                            </select>
                        </div>
                        <div class="col-md-2" id="btn_submit" hidden='true'>
                            <span class="control-label"><h2 class="control-label">Sự Kiện</h2> </span>
                            <button type="button" id="btn-search" class="btn btn-primary form-control">Tìm Kiếm</button>
                        </div>
                    </div>
                </fieldset>
                {{Form::close()}}

            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id='box_danh_sach' hidden='true'>
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"> </i>Danh Sách</h2>
            </div>
            <div class="box-content" id="danhsachtietmuc" >
                <table class='table table-hover' id='table_tiet_muc'>
                    <thead>
                        <tr>
                            <th>Tên Bài Hát</th>
                            <th>Trình Bày</th>
                            <th>Số Điểm</th>
                            <th>Lưu</th>
                        </tr>
                    </thead>
                    <tbody id='tr_ds'>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $('#tenchuongtrinh').on('change', function() {
        $('#sl_hinhthuc').attr('hidden', true);
        $('#sl_vongthi').attr('hidden', true);
        $('#sl_submit').attr('hidden', true);
        $('#sl_doiduthi').attr('hidden', true);
        var sl_tenchuongtrinh = document.getElementById('tenchuongtrinh').value;
        if (sl_tenchuongtrinh != null) {
            $.ajax({
                url: "<?php echo asset('kiemtramahoithi'); ?>",
                type: 'post',
                dataType: 'json',
                data: {id_chuong_trinh: sl_tenchuongtrinh},
            })
                    .done(function(data) {
                        for (var key in data) {
                            var obj = data[key];
                            if (obj.ma_hoi_thi == 'TM') {
                                document.form_search.dvthamgia.value = null;
                                $.ajax({
                                    url: "<?php echo asset('post_dshinhthuc'); ?>",
                                    type: "POST",
                                    data: {id_chuong_trinh: document.getElementById('tenchuongtrinh').value},
                                    dataType: 'json',
                                    success: function(results) {
                                        $('#hinhthucduthi')
                                                .find('option')
                                                .remove()
                                                .end();

                                        $('#hinhthucduthi').append("<option value='null'>--Vui lòng chọn--</option>");
                                        for (var key in results) {
                                            var obj = results[key];
                                            $('#hinhthucduthi').append("<option value='" + obj.id + "'>" + obj.ten_hinh_thuc + "</option>");
                                        }
                                        $('#sl_hinhthuc').attr('hidden', false);
                                        $('#btn_submit').attr('hidden', false);
                                    }
                                })
                            }
                            else {
                                document.form_search.hinhthucduthi.value = null;
                                document.form_search.vongthi.value = null;
                                $.ajax({
                                    url: "<?php echo asset('ds_dvthamgia'); ?>",
                                    type: 'post',
                                    dataType: 'json',
                                    data: {param1: 'value1'},
                                })
                                        .done(function(results) {
                                            $('#dvthamgia')
                                                    .find('option')
                                                    .remove()
                                                    .end();

                                            $('#dvthamgia').append("<option value='null'>--Vui lòng chọn--</option>");
                                            for (var key in results) {
                                                var obj = results[key];
                                                $('#dvthamgia').append("<option value='" + obj.PhieuDangKys_Id + "'>" + obj.ten_don_vi + "</option>");
                                            }
                                            $('#sl_hinhthuc').attr('hidden', true);
                                            $('#sl_vongthi').attr('hidden', true);
                                            $('#btn_submit').attr('hidden', false);
                                        })
                                        .fail(function() {
                                            console.log("error");
                                        })
                                        .always(function() {
                                            console.log("complete");
                                        });

                                $('#sl_doiduthi').attr('hidden', false);
                                $('#btn_submit').attr('hidden', true);
                            }
                        }
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
        } else {
        //
        }
        $('#btn-search').click(function(event) {
            $.ajax({
                url: "<?php echo asset('traogiaitietmuc/dstietmuctietmuc'); ?>",
                type: "POST",
                data: {
                    id_hinh_thuc: document.getElementById('hinhthucduthi').value,
                    id_chuong_trinh: document.getElementById('tenchuongtrinh').value
                },
                dataType: 'json',
                success: function(results) {
                    $('#box_danh_sach').attr('hidden', false);

                    $('#tr_ds')
                            .find('tr')
                            .remove()
                            .end();

                    for (var key in results) {
                        var obj = results[key];
                        $('#tr_ds').append("<tr><td><input type='text' name='ten_tiet_muc_" + obj.id + "' id='ten_tiet_muc_" + obj.id + "' value='" + obj.ten_tiet_muc + "' class='form-control' readonly></td><td><input type='text' name='trinh_bay_" + obj.id + "' id='trinh_bay_" + obj.id + "' value='" + obj.trinh_bay + "' class='form-control' readonly></td><td><input type='text' name='input_diem_so_" + obj.id + "' id='input_diem_so_" + obj.id + "' class='form-control' required='required'></td><td></td></tr>");
                        
                    }
               
                }
            })
            return false;
        });
    });
</script>
@stop