@extends('layouts.admin')

@section('main')

<div class="post-content">
    <h4 class="title"><b>{{{ $bai_viet->tieu_de_bai_viet}}}</b></a></h4>
    <ul class="unstyled post-meta v2 inline">
        <li><i class="icon-user"></i> 
            <span class="info">
                <?php
                $Tai_khoan = Tai_khoan::find($bai_viet->TaiKhoans_Id);
                echo $Tai_khoan->username;
                ?> 
            </span>
        </li>
        <li><i class="icon-calendar"></i> <span class="info">{{{$bai_viet->created_at}}}</span></li>
    </ul> <!--end post-meta-->
    <p>{{{ strip_tags($bai_viet->noi_dung_bai_viet) }}}</p>
    <p>{{{ $bai_viet->tag }}}</p>
    <p>{{ link_to_route('bai_viet.index', 'Quay Lại Trang Chính', array(),array('class' => 'btn btn-info' )) }}</p>

</div> <!--end post-content-->
@stop
