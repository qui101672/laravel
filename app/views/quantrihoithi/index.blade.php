@extends('layouts.admin')

@section('main')
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="icon-star"></i><span>Hội Thi</span></h2>
		</div>
		<div class="box-content">
			<form action="" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<legend>
							<div class="control-group">
			                    {{ Form::label('ma_bai_viet', 'Mã Bài Viết:',array('class'=>'control-label')) }}
			                  <div class="controls">
			                    {{ Form::text('ma_bai_viet',null,array('class'=> 'help-inline')) }}
			                  </div>
			                </div>
			                
						</legend>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
@stop