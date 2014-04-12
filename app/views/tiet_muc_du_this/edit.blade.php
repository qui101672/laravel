@extends('layouts.admin')

@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"> </i> Chỉnh Sửa Tiết Mục</h2>
            </div>
            <div class="box-content">
                <fieldset class="col-sm-12">
                    {{ Form::model($tiet_muc_du_thi, array('method' => 'PATCH', 'route' => array('tiet_muc_du_this.update', $tiet_muc_du_thi->id))) }}
 
    <ul>
        <li>
            {{ Form::label('ms_tiet_muc', 'Ms tiet muc:') }}
            {{ Form::text('ms_tiet_muc') }}
        </li>

        <li>
            {{ Form::label('ten_tiet_muc', 'Ten tiet muc:') }}
            {{ Form::text('ten_tiet_muc') }}
        </li>

        <li>
            {{ Form::label('trinh_bay', 'Trinh bay:') }}
            {{ Form::text('trinh_bay') }}
        </li>

        <li>
            {{ Form::label('the_loai_tiet_muc', 'The loai tiet muc:') }}
            {{ Form::text('the_loai_tiet_muc') }}
        </li>

        <li>
            {{ Form::label('ket_qua', 'Ket qua:') }}
            {{ Form::checkbox('ket_qua') }}
        </li>

        <li>
            {{ Form::label('ghi_chu', 'Ghi chu:') }}
            {{ Form::text('ghi_chu') }}
        </li>

        <li>
            {{ Form::label('vongthis_id', 'Vongthis id:') }}
            {{ Form::text('vongthis_id') }}
        </li>

        <li>
            {{ Form::label('baihats_id', 'Baihats id:') }}
            {{ Form::text('baihats_id') }}
        </li>

        <li>
            {{ Form::label('hinhthucduthis_id', 'Hinhthucduthis id:') }}
            {{ Form::text('hinhthucduthis_id') }}
        </li>

        <li>
            {{ Form::label('phieudangkys_id', 'Phieudangkys id:') }}
            {{ Form::text('phieudangkys_id') }}
        </li>

        <li>
            {{ Form::submit() }}
        </li>
    </ul>
{{ Form::close() }}
                    {{ Form::close() }}
                </fieldset>
            </div>
        </div>
    </div>
</div>



@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
