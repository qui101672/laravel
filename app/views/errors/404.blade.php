@extends('layouts.default')
@section('content')
<div class="row-fluid">
    <div class="box span12">
        <div class='box'>
                <div class="box-header">
                    <h2>
                        <i class="icon-warning-sign"></i>Lỗi 404
                    </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <b>Không tìm thấy trang yêu cầu.</b><br/>
                    <input type="button" value="Quay lại trang chủ" class="btn btn-primary" onclick="location.href='<?=URL?>'"/>
                </div>
        </div>
    </div>
</div>
@stop