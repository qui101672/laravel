@extends('layouts.admin')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Tạo Phiếu Đăng Ký</h2>
            </div>
            <div class="box-content">
                <?php
                if (isset($notic)) {
                    echo $notic;
                } elseif ($check_phieu != '0') {
                    echo "Bạn đã đăng ký";
                } else {
                    //nếu mã hội thi  là CT tức là hội thi theo chuong trinh
                    if ($hoithis_maht == 'CT') {
                        ?>
                        <div id="MyWizard" class="wizard">
                            <ul class="steps">
                                <li data-target="#step1" class="active"><span class="badge badge-info">1</span></li>
                                <li data-target="#step2"><span class="badge">2</span></li>
                                <li data-target="#step3"><span class="badge">3</span></li>
                                <li data-target="#step4"><span class="badge">4</span></li>

                            </ul>
                            <div class="actions">
                                <button type="button" class="btn btn-prev" disabled="true"> <i class="icon-arrow-left" ></i>Quay Lại</button>
                                <button type="button" class="btn btn-success btn-next" data-last="Hoàn Thành"  id="next">Tiếp<i class="icon-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="step-content">
                            <div class="step-pane active" id="step1">
                                {{ Form::open(array('route' => 'dang_ky_phieus.store','class'=>'form-horizontal')) }}
                                <fieldset class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Mã Phiếu Đăng Ký</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-4">
                                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                {{ Form::text('ma_phieu_dang_ky',null,array('class'=> 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Hội Thi</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-4">
                                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                {{ Form::text('HoiThis_Id',$hoi_thi->id,array('class'=> 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Danh Mục Năm Id</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-4">
                                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                {{ Form::text('HoiThis_DanhMucNamsId',$hoi_thi->DanhMucNams_Id,array('class'=> 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Danh Mục Hội Thi Id</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-4">
                                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                {{ Form::text('HoiThis_DanhMucHoiThisId',$hoi_thi->DanhMucHoiThis_Id,array('class'=> 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ghi Chú</label>
                                        <div class="controls row">
                                            <div class="input-group col-sm-4">
                                                <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                {{ Form::text('ghi_chu_pdk',null,array('class'=> 'form-control')) }}
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                {{ Form::close() }}
                            </div>
                            <div class="step-pane" id="step2">
                                <div class="form-group">
                                    <label class="control-label">Trưởng Đoàn</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('truong_doan',null,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phó Trưởng Đoàn</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('pho_doan',null,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-pane" id="step3">
                                <?php
                                //bien tam
                                $i = 0;
                                foreach ($ds_hinhthuc as $ds_hinhthuc) {
                                    ?>
                                    <div class="box">
                                        <div class="box-header">
                                            <h2><?= $ds_hinhthuc->ten_hinh_thuc; ?></h2>
                                        </div>
                                        <div class="box-content">
                                            {{ Form::open() }}
                                            <input type="text" id="hinh_thuc_du_thi.<?= $ds_hinhthuc->id; ?>" class="form-control" value="<?= $ds_hinhthuc->id; ?>" style="display:none"/>
                                            <div class="form-group">
                                                <label class="control-label"  >Tên Tiết Mục</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                        <input type="text" id="ten_tiet_muc.<?= $i; ?>" class="form-control" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"  >Trình Bày</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                        <input type="text" id="trinh_bay.<?= $i; ?>" class="form-control" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label"  >Thể Loại Tiết Mục</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                        <input type="text" id="the_loai_tiet_muc.<?= $i; ?>" class="form-control" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" hidden="true">
                                                <label class="control-label">Bài Hát</label>
                                                <div class="controls row">
                                                    <div class="input-group col-sm-4">
                                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                                        <input type="text" id="baihats_id.<?= $i; ?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>
                            <div class="step-pane" id="step4">
                                <fieldset>Thành Phần Tham Gia</fieldset>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                //nếu mã hội thi là 2 tức là hoi thi theo tiet muc
                elseif ($hoithis_maht == 'TM') {
                    ?>
                    <div id="MyWizard" class="wizard">
                        <ul class="steps">
                            <li data-target="#step1" class="active"><span class="badge badge-info">1</span></li>
                            <li data-target="#step2"><span class="badge">2</span></li>
                            <li data-target="#step3"><span class="badge">3</span></li>
                        </ul>
                        <div class="actions">
                            <button type="button" class="btn btn-prev" disabled="true"> <i class="icon-arrow-left" ></i>Quay Lại</button>
                            <button type="button" class="btn btn-success btn-next" data-last="Hoàn Thành"  id="next">Tiếp<i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="step-content">
                        <div class="step-pane active" id="step1">
                            <?php
                            ?>
                            {{ Form::open(array('route' => 'dang_ky_phieus.store','class'=>'form-horizontal')) }}
                            <fieldset class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Mã Phiếu Đăng Ký</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('ma_phieu_dang_ky',null,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Hội Thi</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('HoiThis_Id',$hoi_thi->id,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Danh Mục Năm Id</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('HoiThis_DanhMucNamsId',$hoi_thi->DanhMucNams_Id,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Danh Mục Hội Thi Id</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('HoiThis_DanhMucHoiThisId',$hoi_thi->DanhMucHoiThis_Id,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Ghi Chú</label>
                                    <div class="controls row">
                                        <div class="input-group col-sm-4">
                                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                                            {{ Form::text('ghi_chu_pdk',null,array('class'=> 'form-control')) }}
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="step-pane" id="step2">

                            <div class="form-group">
                                <label class="control-label"  >Mã Số Tiết Mục</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ms_tiet_muc',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label"  >Tên Tiết Mục</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ten_tiet_muc',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label"  >Trình Bày</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('trinh_bay',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label"  >Thể Loại Tiết Mục</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('the_loai_tiet_muc',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Hình Thức Dự Thi</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-star"></i></span>
                                        <select name='HinhThucDuThis_Id' id='hinhthucduthis_id' class="form-control" required="required">
                                            <option>---Chọn---</option>
                                            <?php
                                            foreach ($ds_hinhthuc as $ds_hinhthuc) {
                                                echo '<option value=' . $ds_hinhthuc->id . '>' . $ds_hinhthuc->ten_hinh_thuc . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" hidden="true">
                                <label class="control-label"  >Bài Hát</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('BaiHats_Id',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ghi Chú</label>
                                <div class="controls row">
                                    <div class="input-group col-sm-4">
                                        <span class="input-group-addon"><i class="icon-edit"></i></span>
                                        {{ Form::text('ghi_chu_tietmuc',null,array('class'=> 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                {{ Form::submit('Tạo Phiếu Đăng Ký', array('class' => 'btn btn-info')) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                        <div class="step-pane" id="step3">
                            {{ Form::open(array()) }}
                            <ul>


                                <li>
                                    {{ Form::submit() }}
                                </li>
                            </ul>
                            {{ Form::close() }}
                        </div>
                        <?php
                    }
                }
                ?>
            </div>


        </div> 
    </div>
</div>
</div>
</div>
@stop