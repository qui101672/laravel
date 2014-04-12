@extends('layouts.admin')

@section('main')

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <h2><i class="icon-edit"></i>Danh Mục Hội Thi</h2>
            </div>
            <div class="box-content">
                <p>{{ link_to_route('ban_to_chuc.index', 'Return to all btcs') }}</p>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>TaiKhoans_Id</th>
                            <th>Ghi_chu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{{ $btc->TaiKhoans_Id }}}</td>
                            <td>{{{ $btc->ghi_chu }}}</td>
                            <td>{{ link_to_route('ban_to_chuc.edit', 'Edit', array($btc->id), array('class' => 'btn btn-info')) }}
                            </td>
                            <td>
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('ban_to_chuc.destroy', $btc->id))) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
