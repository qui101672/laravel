@extends('layouts.admin')

@section('main')

<div class="box spam12">
    <div class="box-header">
       <h2><i class="icon-user"> </i>Tài Khoản</h2>

    </div>
    <div class="box-content">

<p>{{ link_to_route('tai_khoan.index', 'Trở về danh sách tài khoản',null,array('class'=>'btn btn-primary')) }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Username</td>
				<td>Password</td>
				<td colspan="3">Quyền</td>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $tai_khoan->username }}}</td>
					<td>****************************</</td>
				 
					<?php 
						$quyen = Phan_quyen::find($tai_khoan->PhanQuyen_Id);
						echo '<td>'.$quyen->ten_quyen.'</td>';
					?>

                    <td>{{ link_to_route('tai_khoan.edit', 'Edit', array($tai_khoan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('tai_khoan.destroy', $tai_khoan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>
</div>
</div>
@stop
