@extends('layouts.admin')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"> </i>Phiếu Đăng Ký {{$mavong+1}}</h2>
            </div>
            <div class="box-content">
                {{ Form::open(array('route' => 'dang_ky_phieus.store_tietmuc')) }}
               
                <div class="form-group">
                    <label class="control-label">Tên Tiết Mục</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ten_tiet_muc',null,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Trình Bày</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('trinh_bay',null,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="date01">Thể Loại Tiết Mục</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('the_loai_tiet_muc',null,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div><div class="form-group">
                    <label class="control-label" for="date01">Bài Hát</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('baihats_id',null,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>

                <div class="form-group" hidden="true">
                    <label class="control-label" for="date01">Vòng Thi</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('vongthis_id',$mavong,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden="true">
                    <label class="control-label" for="date01">Hình Thức Dự Thi Id</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('hinhthucduthis_id',$mahinhthuc,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden="true">
                    <label class="control-label" for="date01">Mã Phiếu ID</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('phieudangkys_id',$maphieu,array('class'=> 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    {{ Form::submit('Đăng Ký Tiết Mục', array('class' => 'btn btn-info')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


@stop