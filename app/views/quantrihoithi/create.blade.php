@extends('layouts.admin')
@section('main')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h2>
                    <i class="icon-user"></i><span>Tạo Hội Thi</span>
                </h2>
            </div>
            <div class="box-content">
                <div id="MyWizard" class="wizard">
                    <ul class="steps">
                        <li data-target="#step1" class="active"><span class="badge badge-info">1</span></li>
                        <li data-target="#step2"><span class="badge">2</span></li>
                        <li data-target="#step3" id='step_vongthi'><span class="badge">3</span></li>
                    </ul>
                    <div class="actions">
                        <button type="button" class="btn btn-prev" disabled="true"> <i class="icon-arrow-left" ></i>Quay Lại</button>
                        <button type="button" class="btn btn-success btn-next" data-last="Hoàn Thành"  id="next" disabled>Tiếp<i class="icon-arrow-right"></i></button>
                    </div>
                </div>
                <div class="step-content">
                    <div class="step-pane active" id="step1">
                        <fieldset class="col-sm-12">
                            <div id="data-table"></div>
                            {{Form::open(array('name'=>'hoi_thi','id'=>'hoi_thi','url'=>'hoi_this')) }}
                            <div class="form-group">
                                <label class="control-label">Năm</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <select name='DanhMucNams_Id' id='DanhMucNams_Id' class="form-control" required>
                                            <option value="">---Chọn---</option>
                                            <?php
                                            foreach ($danh_muc_nam as $danh_muc_nam)
                                                echo '<option value=' . $danh_muc_nam->id . '>' . $danh_muc_nam->nam . '</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Hội Thi</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <select name='DanhMucHoiThis_Id' id='DanhMucHoiThis_Id' class="form-control" required>
                                            <option value="">---Chọn---</option>
                                            <?php
                                            foreach ($danh_muc_hoi_thi as $danh_muc_hoi_thi)
                                                echo '<option value=' . $danh_muc_hoi_thi->id . '>' . $danh_muc_hoi_thi->ten_hoi_thi . '</option>';
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Tên Chương Trình</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        {{ Form::text('ten_chuong_trinh',null,array('class'=> 'form-control', 'id' => 'ten_chuong_trinh','required')) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Thời Gian Bắt Đầu:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        {{ Form::text('time_start',null,array('class'=> 'form-control date-picker','id'=>'time_start')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Thời Gian Kết Thúc:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        {{ Form::text('time_end',null,array('class'=> 'form-control date-picker','id'=>'time_end')) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Ghi Chú:</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ghi_chu',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit">Tạo</button>

                            {{ Form::close() }}
                            @if ($errors->any())
                            <ul>
                                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                            </ul>
                            @endif
                        </fieldset>
                    </div>
                    <div class="step-pane" id="step2">
                        <fieldset class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã Hình Thức</th>
                                        <th>Tên Hình Thức</th>
                                        <th>Nội Dung Hình Thức</th>
                                        <th>Số Lượng Yêu Cầu</th>
                                        <th>Số Vòng Thi</th>
                                    </tr>
                                </thead>
                                <tbody id="table_hinh_thuc_du_thi">

                                </tbody>
                            </table>
                            <hr>
                            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#hinhthucduthi" id="modal-data">
                                Tạo Hình Thức Dự Thi
                            </button>
                        </fieldset>

                    </div>
                    <div class="step-pane" id="step3">
                        <fieldset class="col-sm-12">
                            <table id="thong_tin_hoi_thi" class="table table_tennis">
                                
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="hinhthucduthi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Khởi Tạo Hình Thức Dự Thi</h4>
            </div>
            <div class="modal-body">
                {{Form::open(array('name'=>'hinh_thuc_du_thi','id'=>'hinh_thuc_du_thi','url'=>'hinh_thuc_du_this')) }}
                <div class="form-group" hidden>
                    <label class="control-label">Id hội thi:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_Id',null,array('class'=> 'form-control','id'=>'HoiThis_Id','readonly'=>'true')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden>
                    <label class="control-label">Id danh mục năm:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_DanhMucNamsId',null,array('class'=> 'form-control','id'=>'HoiThis_DanhMucNamsId','readonly'=>'true')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden>
                    <label class="control-label">Id danh mục hoi thi:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_DanhMucHoiThisId',null,array('class'=> 'form-control','id'=>'HoiThis_DanhMucHoiThisId','readonly'=>'true')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden>
                    <label class="control-label">Mã Hình Thức:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ma_hinh_thuc',null,array('class'=> 'form-control','id'=>'ma_hinh_thuc')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Tên Hình Thức:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            <select name='ten_hinh_thuc' id='ten_hinh_thuc' class="form-control" required="required">
                                <option value="Đơn Ca">Đơn Ca</option>
                                <option value="Song Ca">Song Ca</option>
                                <option value="Tam Ca">Tam Ca</option>
                                <option value="Tốp Ca">Tốp Ca</option>
                                <option value="Ca Múa">Ca Múa</option>
                                <option value="Múa">Múa</option>
                                <option value="Kịch">Kịch</option>
                                <option value="Tiến Quân Ca">Tiến Quân Ca</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Nội Dung Hình Thức:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            <textarea name="noi_dung_hinh_thuc" id="noi_dung_hinh_thuc" rows="6" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 126px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Số Lượng Yêu Cầu:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('so_luong_yeu_cau',null,array('class'=> 'form-control','id'=>'so_luong_yeu_cau')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Số Vòng Thi:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            <select name='so_vong_thi' id='so_vong_thi' class="form-control" required="required">
                                <option>--Chọn---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Bắt Buộc:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            <input type="checkbox" name="bat_buoc" id="bat_buoc" checked="checked" /> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Ghi Chú:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ghi_chu',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="tao_hinh_thuc">Tạo Hình Thức Dự Thi</button>
                </div>
                {{ Form::close() }}
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $("#next").click(function() {
        if ($('#step_vongthi').attr('class') == 'active') {

            var n = noty({text: 'Khởi Tạo Hội Thi Thành Công', type: 'success'});
            //chuyển trang về danh sách hội thi
            var url = "../hoi_this";
            window.location.replace(url);
            //
        }
    });

    jQuery(document).ready(function($) {
        //Truyền Data hội thi vào DB
        $('#hoi_thi').on('submit', function() {
            var request = $.ajax({
                url: $(this).prop('action'),
                type: "POST",
                data: {
                    DanhMucNams_Id: document.hoi_thi.DanhMucNams_Id.value,
                    DanhMucHoiThis_Id: document.hoi_thi.DanhMucHoiThis_Id.value,
                    ten_chuong_trinh: document.hoi_thi.ten_chuong_trinh.value,
                    time_start: document.hoi_thi.time_start.value,
                    time_end: document.hoi_thi.time_end.value,
                    ghi_chu: document.hoi_thi.DanhMucNams_Id.value
                },
                dataType: "json",
                success: function(result) {
                    $("#hoi_thi").remove();
                    $("#data-table").append("<table id='result_ht' class='table table-hover'><thead><tr><th>ID Hội Thi</th><th>Tên Chương Trình</th><th>Thời Gian Bắt Đầu</th><th>Thời Gian Kết Thúc</th><th hidden>ID Danh Mục Năm</th><th hidden>ID Danh Mục Hội Thi</th><th colspan='2'>Ghi Chú</th></tr></thead><tbody><tr><td id='id_hoi_thi'>" + result.id + "</td><td id='ten_chuong_trinh_result'>" + result.ten_chuong_trinh + "</td><td id='time_start_result'>" + result.time_start + "</td><td id='time_end_result'>" + result.time_end + "</td><td id='danh_muc_nam_id' hidden>" + result.DanhMucNams_Id + "</td><td id='danh_muc_hoi_thi_id_result' hidden>" + result.DanhMucHoiThis_Id + "</td><td id='ghi_chu_hoi_thi_result'>" + result.ghi_chu + "</td></tr></tbody></table>");
                    $('#next').removeAttr("disabled");
                    $('#thong_tin_hoi_thi').append("<thead><tr><td colspan='2'><h1><center>" + result.ten_chuong_trinh + "</center></h1></td></tr><tr><th>Tên Hình Thức</th><th>Nội dung</th><th>Số Vòng Thi</th><th>Số Lượng Yêu Cầu</th></tr></thead><tr>");
                }
            });
            return false;
        });

//Get data hoi thi var user_id = $(this).closest('#result_hoithi').attr("danh_muc_nam_id");
        $('#modal-data').click(function(event) {
            $('#ma_hinh_thuc').val('');
            $('#ten_hinh_thuc').val('---Chọn---');
            $('#noi_dung_hinh_thuc').val('');
            $('#so_vong_thi').val('');
            $('#ghi_chu').val('');
            $('#HoiThis_DanhMucNamsId').val(document.getElementById("danh_muc_nam_id").innerHTML);
            $('#HoiThis_Id').val(document.getElementById("id_hoi_thi").innerHTML);
            $('#HoiThis_DanhMucHoiThisId').val(document.getElementById("danh_muc_hoi_thi_id_result").innerHTML);
        });

//Form tao hinh thuc
        $('#tao_hinh_thuc').click(function(event) {
            /* Act on the event */
            if ($('#bat_buoc').attr('checked') == 'checked') {
                bat_buoc = 1;
            } else {
                bat_buoc = 0;
            }
            var request = $.ajax({
                url: $('#hinh_thuc_du_thi').prop('action'),
                type: "POST",
                data: {
                    ma_hinh_thuc: document.hinh_thuc_du_thi.ma_hinh_thuc.value,
                    ten_hinh_thuc: document.hinh_thuc_du_thi.ten_hinh_thuc.value,
                    noi_dung_hinh_thuc: document.hinh_thuc_du_thi.noi_dung_hinh_thuc.value,
                    so_luong_yeu_cau: document.hinh_thuc_du_thi.so_luong_yeu_cau.value,
                    so_vong_thi: document.hinh_thuc_du_thi.so_vong_thi.value,
                    ghi_chu: document.hinh_thuc_du_thi.ghi_chu.value,
                    bat_buoc: bat_buoc,
                    HoiThis_Id: document.hinh_thuc_du_thi.HoiThis_Id.value,
                    HoiThis_DanhMucNamsId: document.hinh_thuc_du_thi.HoiThis_DanhMucNamsId.value,
                    HoiThis_DanhMucHoiThisId: document.hinh_thuc_du_thi.HoiThis_DanhMucHoiThisId.value
                },
                dataType: "json"
            });
            request.done(function(result) {
                $('#table_hinh_thuc_du_thi').append("<tr><td>" + result.id + "</td><td>" + result.ma_hinh_thuc + "</td><td>" + result.ten_hinh_thuc + "</td><td>" + result.noi_dung_hinh_thuc + "</td><td>" + result.so_luong_yeu_cau + "</td><td>" + result.so_vong_thi + "</td><td></td></tr>");
                $('#thong_tin_hoi_thi').append("<tr><td>" + result.ten_hinh_thuc + "</td><td>" + result.noi_dung_hinh_thuc + "</td><td>" + result.so_vong_thi + "</td><td>" + result.so_luong_yeu_cau + "</td></tr>");
                var n = noty({text: 'Khởi Tạo Hình Thức Thành Công', type: 'success'});

            });
        });
    });//end jquery
</script>
@stop