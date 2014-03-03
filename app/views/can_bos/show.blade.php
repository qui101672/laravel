@extends('layouts.scaffold')

@section('main')

<h1>Show Can_bo</h1>

<p>{{ link_to_route('can_bos.index', 'Return to all can_bos') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Mscb</th>
            <th>Ho_ten</th>
            <th>Gioi_tinh</th>
            <th>Ngay_sinh</th>
            <th>Dia_chi</th>
            <th>Que_quan</th>
            <th>Email</th>
            <th>Sdt</th>
            <th>Ghi_chu</th>
            <th>DonVis_Id</th>
            <th>TaiKhoans_Id</th>
            <th>Chuc_vu</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $can_bo->mscb }}}</td>
            <td>{{{ $can_bo->ho_ten }}}</td>
            <td>{{{ $can_bo->gioi_tinh }}}</td>
            <td>{{{ $can_bo->ngay_sinh }}}</td>
            <td>{{{ $can_bo->dia_chi }}}</td>
            <td>{{{ $can_bo->que_quan }}}</td>
            <td>{{{ $can_bo->email }}}</td>
            <td>{{{ $can_bo->sdt }}}</td>
            <td>{{{ $can_bo->ghi_chu }}}</td>
            <td>{{{ $can_bo->DonVis_Id }}}</td>
            <td>{{{ $can_bo->TaiKhoans_Id }}}</td>
            <td>{{{ $can_bo->chuc_vu }}}</td>
            <td>{{ link_to_route('can_bos.edit', 'Edit', array($can_bo->id), array('class' => 'btn btn-info')) }}</td>
            <td>
                {{ Form::open(array('method' => 'DELETE', 'route' => array('can_bos.destroy', $can_bo->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
    </tbody>
</table>

@stop
