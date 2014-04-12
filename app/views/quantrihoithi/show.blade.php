@extends('layouts.admin')

@section('main')

<p>{{ link_to_route('hoi_this.index', 'Return to all hoi_this') }}</p>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Chi Tiết Hội Thi</h2>
        </div>
        <div class="box-content">

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <td>Tên Chương Trình</td>
                        <td>Thời Gian Bắt Đầu</td>
                        <td>Thời Gian Kết Thúc</td>
                        <td>Danh Mục Năm ID</td>
                        <td>Danh Mục Hội Thi ID</td>
                        <td colspan="3">Ghi Chú</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="ten_chuong_trinh_{{{ $hoi_thi->id }}}" id="id_hinh_thuc_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->ten_chuong_trinh }}}" required="required" pattern="" title="{{{ $hoi_thi->ten_chuong_trinh }}}" readonly></td>

                        <td><input type="text" name="time_start_{{{ $hoi_thi->id }}}" id="time_start_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->time_start }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="time_end_{{{ $hoi_thi->id }}}" id="time_end_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->time_end }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="DanhMucNams_Id_{{{ $hoi_thi->id }}}" id="DanhMucNams_Id_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->DanhMucNams_Id }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="DanhMucHoiThis_Id_{{{ $hoi_thi->id }}}" id="DanhMucHoiThis_Id_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->DanhMucHoiThis_Id }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="ghi_chu_hoi_thi{{{ $hoi_thi->ghi_chu }}}" id="id_highi_chu_hoi_thinh_thuc_{{{ $hoi_thi->id }}}" class="form-control" value="{{{ $hoi_thi->ghi_chu }}}" required="required" pattern="" title="" readonly></td>

                        <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#edit_hoithi" id="modal-data">Sửa</button></td>
                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('hoi_this.destroy', $hoi_thi->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Hình Thức Thuộc Hội Thi</h2>
        </div>
        <div class="box-content">

            <table class="table table-hover">
                <fieldset>
                    <thead>
                        <tr>
                            <th>ID Hình Thức</th>
                            <th>Tên Hình Thức</th>
                            <th>Nội Dung Hình Thức</th>
                            <th>Số Lượng SV Yêu Cầu</th>
                            <th>Số Vòng Thi</th>
                            <th colspan="3">Ghi Chú</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($hinh_thuc as $hinh_thuc)
                        <tr>
                            <td><input type="text" name="id_hinh_thuc_{{{ $hinh_thuc->id }}}" id="id_hinh_thuc_{{{ $hinh_thuc->id }}}" class="form-control" value="{{{ $hinh_thuc->id }}}" required="required" pattern="" title="" readonly></td>

                            <td><input type="text" name="ten_hinh_thuc_{{{ $hinh_thuc->id }}}" id="{{{ $hinh_thuc->ten_hinh_thuc }}}" class="form-control" value="{{{ $hinh_thuc->ten_hinh_thuc }}}" required="required" pattern="" title="" readonly></td>

                            <td><input type="text" name="noi_dung_hinh_thuc_{{{ $hinh_thuc->id }}}" id="noi_dung_hinh_thuc_{{{ $hinh_thuc->id }}}" class="form-control" value="{{{ $hinh_thuc->noi_dung_hinh_thuc }}}" required="required" pattern="" title="" readonly></td>

                            <td><input type="text" name="so_luong_sv_{{{ $hinh_thuc->id }}}" id="so_luong_sv_{{{ $hinh_thuc->id }}}" class="form-control" value="{{{ $hinh_thuc->so_luong_yeu_cau }}}" required="required" pattern="" title="" readonly></td>

                            <td><input type="text" name="so_vong_thi_{{{ $hinh_thuc->id }}}" id="so_vong_thi_{{{ $hinh_thuc->id }}}" class="form-control" value="{{{ $hinh_thuc->so_vong_thi }}}" required="required" pattern="" title="" readonly></td>

                            <td><input type="text" name="ghi_chu_hinh_thuc_{{{ $hinh_thuc->id }}}" id="{{{ $hinh_thuc->id }}}" class="form-control" value="{{{ $hinh_thuc->ghi_chu }}}" required="required" pattern="" title="" readonly></td>

                            <td>{{ link_to_route('hinh_thuc_du_this.edit', 'Sửa', array($hinh_thuc->id), array('class' => 'btn btn-default')) }}</td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('hinh_thuc_du_this.destroy', $hinh_thuc->id))) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hinhthucduthi" id="add_hinh_thuc">Thêm Hình Thức</button>
                    </tbody>
                </fieldset>
            </table>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Vòng thi</h2>
        </div>
        <div class="box-content">

            <table class="table table-hover">
                <fieldset>
                    <thead>
                        <tr>
                            <th>Hình Thức Dự Thi ID</th>
                            <th>Mã Vòng Thi</th>
                            <th>Tên Vòng Thi</th>
                            <th colspan="3">Ghi Chú</th>
                        </tr>
                    </thead>

                    @foreach ($vong_thi as $key => $value) 
                    @foreach ($value as $value) 
                    <tr>
                        <td><input type="text" name="id_hinh_thuc_{{{ $value->HinhThucDuThis_Id }}}" id="id_hinh_thuc_{{{ $value->HinhThucDuThis_Id }}}" class="form-control" value="{{{ $value->HinhThucDuThis_Id }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="ma_vong_thi_{{{ $value->HinhThucDuThis_Id }}}" id="ma_vong_thi_{{{ $value->ma_vong_thi }}}" class="form-control" value="{{{ $value->ma_vong_thi }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="ten_vong_thi_{{{ $value->HinhThucDuThis_Id }}}" id="ten_vong_thi_{{{ $value->HinhThucDuThis_Id }}}" class="form-control" value="{{{ $value->ten_vong_thi }}}" required="required" pattern="" title="" readonly></td>

                        <td><input type="text" name="ghi_chu_{{{ $value->HinhThucDuThis_Id }}}" id="ghi_chu_vong_thi_{{{ $value->HinhThucDuThis_Id }}}" class="form-control" value="{{{ $value->ghi_chu }}}" required="required" pattern="" title="" readonly></td>


                        <td>
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('vong_this.destroy', $value->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </fieldset>
            </table>
        </div>
    </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"> </i>Giải Thưởng</h2>
        </div>
        <div class="box-content">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tao_giaithuong" id="modal-data">Tạo Giải Thưởng</button>
            <table class="table table-hover">
                <fieldset>
                    <thead>
                        <tr>
                            <th>Hình Thức Dự Thi ID</th>
                            <th>Mã Giải Thưởng</th>
                            <th>Tên Giải Thưởng</th>
                            <th>Số Lượng</th>
                            <th>Số Tiền</th>
                            <th>Ghi Chú</th>
                        </tr>
                    </thead>

                    @foreach ($giai_thuong as $key => $value) 
                    @foreach ($value as $value) 
                    <tr>
                        <td>{{{ $value->HinhThucDuThis_Id }}}</td>
                        <td>{{{ $value->ma_giai_thuong }}}</td>
                        <td>{{{ $value->ten_giai_thuong }}}</td>
                        <td>{{{ $value->so_luong }}}</td>
                        <td>{{{ $value->so_tien }}}</td>
                        <td>{{{ $value->ghi_chu }}}</td>
                    </tr>
                    @endforeach
                    @endforeach
                </fieldset>
            </table>
        </div>
    </div>
</div>

<!-- form chỉnh sửa hình thức dự thi -->
<div class="modal fade" id="hinhthucduthi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm Hình Thức Dự Thi</h4>
            </div>
            <div class="modal-body">
                {{Form::open(array('name'=>'hinh_thuc_du_thi','id'=>'hinh_thuc_du_thi','url'=>'hinh_thuc_du_this')) }}
                <div class="form-group" hidden="true">
                    <label class="control-label">Id hội thi:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_Id',$hoi_thi->id,array('class'=> 'form-control','id'=>'HoiThis_Id','readonly'=>'true')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group" hidden="true">
                    <label class="control-label">Id danh mục năm:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_DanhMucNamsId',$hoi_thi->DanhMucNams_Id,array('class'=> 'form-control','id'=>'HoiThis_DanhMucNamsId','readonly'=>'true')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group" hidden="true">
                    <label class="control-label">Id danh mục hoi thi:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-8">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('HoiThis_DanhMucHoiThisId',$hoi_thi->DanhMucHoiThis_Id,array('class'=> 'form-control','id'=>'HoiThis_DanhMucHoiThisId','readonly'=>'true')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group">
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
                            {{ Form::text('so_vong_thi',null,array('class'=> 'form-control','id'=>'so_vong_thi')) }}
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

                    <button type="button" class="btn btn-primary" id="tao_hinh_thuc">Tạo Hình Thức Dự Thi</button>
                </div>
                {{ Form::close() }}
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- form chỉnh sửa hội thi -->

<!-- form tao - sua vong thi -->
<div class="modal fade" id="edit_vongthi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Chỉnh Sủa Hội Thi</h4>
            </div>
            <div class="modal-body">
                {{ Form::model( array('name'=>'edit_hoithi','id'=>'edit_hoithi','method' => 'PATCH', 'route' => 'hoi_this.update')) }}
                {{ Form::open(array('route' => 'vong_this.store')) }}
                <ul>
                    <li>
                        {{ Form::label('ma_vong_thi', 'Ma_vong_thi:') }}
                        {{ Form::text('ma_vong_thi') }}
                    </li>

                    <li>
                        {{ Form::label('ten_vong_thi', 'Ten_vong_thi:') }}
                        {{ Form::text('ten_vong_thi') }}
                    </li>

                    <li>
                        {{ Form::label('HinhThucDuThis_Id', 'HinhThucDuThis_Id:') }}
                        {{ Form::input('number', 'HinhThucDuThis_Id') }}
                    </li>

                    <li>
                        {{ Form::label('ghi_chu', 'Ghi_chu:') }}
                        {{ Form::text('ghi_chu') }}
                    </li>

                    <li>
                        {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
                    </li>
                </ul>
                {{ Form::close() }}

            </div>
        </div> 
    </div> 
</div> 
<!-- form tao - sua vong thi -->
<div class="modal fade" id="tao_giaithuong">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm Giải Thưởng</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array('url' => 'giaithuongs/store','id'=>'giaithuong','name'=>'giaithuong')) }}
                <div class="form-group">
                    <label class="control-label">Mã Giải Thưởng</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ma_giai_thuong',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Tên Giải Thưởng</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ten_giai_thuong',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Hình Thức Dự Thi</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            <select name='HinhThucDuThis_Id' id='HinhThucDuThis_Id' class="form-control" required="required">
                                <?php
                                echo "<option value=''>--- Chọn ---</option>";
                                foreach ($hinh_thuc_data as $hinh_thuc_data)
                                    echo '<option value=' . $hinh_thuc_data->id . '>' . $hinh_thuc_data->ten_hinh_thuc . '</option>';
                                ?>
                            </select>
                        </div>  
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label">Số Lượng</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('so_luong',null,array('class'=> 'form-control','id'=>'so_luong')) }}
                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Số Tiền</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('so_tien',null,array('class'=> 'form-control','id'=>'so_tien')) }}
                        </div>  
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label">Ghi Chú</label>
                    <div class="controls row">
                        <div class="input-group col-sm-12">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ghi_chu',null,array('class'=> 'form-control','id'=>'ghi_chu')) }}
                        </div>  
                    </div>
                </div>
                <button type="button" class="btn btn-default" id='btn_giaithuong'>Tạo Giải Thưởng</button>
         
                {{ Form::close() }}
            </div>
        </div> 
    </div> 
</div> 
<script type="text/javascript">
    $('#tao_hinh_thuc').click(function(event) {
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
           window.location.reload(true);
        });

    });
  
    $('#btn_giaithuong').click(function(event) {
        var request = $.ajax({
            url: $('#giaithuong').prop('action'),
            type: "POST",
            data: {
                ma_giai_thuong: document.giaithuong.ma_giai_thuong.value,
                ten_giai_thuong: document.giaithuong.ten_giai_thuong.value,
                HinhThucDuThis_Id: document.giaithuong.HinhThucDuThis_Id.value,
                so_luong: document.giaithuong.so_luong.value,
                so_tien: document.giaithuong.so_tien.value,
                ghi_chu: document.giaithuong.ghi_chu.value
            },
            dataType: "json"
        });
        request.done(function(result) {
            window.location.reload(true);
        });

    });
</script>
@stop
