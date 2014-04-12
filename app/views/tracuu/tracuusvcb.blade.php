@extends('layouts.admin')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box">
        <div class="box-header">
            <h2><i class="icon-edit"></i><span>Tra Cứu</span></h2>
        </div>
        <div class="box-content">
            <fieldset class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Mã Số CB/SV:</label>
                    <div class="controls row">
                        <div class="input-group col-sm-4">
                            <span class="input-group-addon"><i class="icon-edit"></i></span>
                            {{ Form::text('ma_so',null,array('class'=> 'form-control')) }}
                        </div>  
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
@stop
