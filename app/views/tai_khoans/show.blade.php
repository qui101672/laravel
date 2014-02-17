@extends('layouts.admin')

@section('main')

<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-user"> </i>Tài Khoản</h2>

    </div>
    <div class="box-content">

<p>{{ link_to_route('tai_khoans.index', 'Return to all tai_khoans') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Username</th>
				<th>Password</th>
				<th>PhanQuyen_Id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tai_khoan->username }}}</td>
					<td>{{{ $tai_khoan->password }}}</td>
					<td>{{{ $tai_khoan->PhanQuyen_Id }}}</td>
                    <td>{{ link_to_route('tai_khoans.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tai_khoans.destroy', $tai_khoan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>
</div>
</div>
@stop
