@extends('layouts.admin')

@section('main')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="box">
    <div class="box-header">
        <h2>
            <i class="icon-user"></i><span>Danh Sách Tiết Mục Tham Gia</span>
        </h2>
    </div>
    <div class="box-content">
	    {{Form::open(array('url' =>'ds_tietmuc_cham_diem','role'=>'form', 'name'=>'form_search','id'=>'form_search'))}}
	    <fieldset>
	    	 <div class="row" >
		    	 <div class="col-md-4">
		    	 	<span class="control-label"><h2>Tên Chương Trình</h2></span>
		    	 	<select name="tenchuongtrinh" id="tenchuongtrinh" class="form-control">
		    	 		<?php 
		    	 		 echo "<option value=''>Chọn Chương Trình</option>";
		    	 		 $hoi_thi = new Hoi_thi();
		    	 		 $ds_hoithi = $hoi_thi->get_dshoithi();
		    	 		 foreach ($ds_hoithi as $ds_hoithi) {
		    	 		 	echo "<option value='".$ds_hoithi->id."'>".$ds_hoithi->ten_chuong_trinh."</option>";
		    	 		 }
		    	 		?>
		    	 	</select>
		    	 </div>
		    	 
	    	 <div class="col-md-3" id="sl_hinhthuc" hidden='true'>
	    	 <span class="control-label"><h2>Hình Thức</h2></span>
	    	 	<select name="hinhthucduthi" id="hinhthucduthi" class="form-control">
	    	 		<option value="">-- Select One --</option>
	    	 	</select>
	    	 </div>
	    	 <div class="col-md-3" id="sl_vongthi" hidden='true'>
	     		 <span class="control-label"><h2>Vòng Thi</h2></span>
		    	 	<select name="vongthi" id="vongthi" class="form-control">
		    	 		<option value="">--Chọn--</option>
		    	 	</select>
	    	 </div>
	    	 <div class="col-md-2" id="btn_submit" hidden='true'>
	    	 <span class="control-label"><h2 class="control-label">Sự Kiện</h2> </span>
	    	 	<button type="submit" class="btn btn-primary form-control">Tìm Kiếm</button>
	    	 </div>
	    	 </div>
    	</fieldset>
	    {{Form::close()}}
    </div>
</div>
</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#tenchuongtrinh').on('change', function() {
		 $.ajax({
            url: "<?php echo asset('post_dshinhthuc');?>",
            type: "POST",
		 	data: {id_chuong_trinh: document.getElementById('tenchuongtrinh').value},
		 	dataType: 'json',
		 	success: function(results){

		 	 	$('#hinhthucduthi')
			    .find('option')
			    .remove()
			    .end();

		 	 	$('#sl_hinhthuc').append("<option value=>-- Select One --</option>");
		 		for(var key in results) {
				    var obj = results[key];
				    $('#hinhthucduthi').append("<option value='"+obj.id+"'>"+obj.ten_hinh_thuc+"</option>");
				}
				$('#sl_hinhthuc').attr('hidden', false); 
				$('#sl_vongthi').attr('hidden', true);
				$('#btn_submit').attr('hidden', true);
            }
		 })		  
		});
		$('#hinhthucduthi').on('change', function() {
			$.ajax({
            url: "<?php echo asset('post_dsvongthi');?>",
            type: "POST",
		 	data: {id_hinh_thuc: document.getElementById('hinhthucduthi').value},
		 	dataType: 'json',
		 	success: function(results){
		 		$('#vongthi')
			    .find('option')
			    .remove()
			    .end();
		 		$('#form_search').append("<option value=>-- Select One --</option>");
		 		for(var key in results) {
				    var obj = results[key];
				    if(obj.id == ''){
				    }
				    else{
				    	$('#vongthi').append("<option value='"+obj.id+"'>"+obj.ten_vong_thi+"</option>");
				    	$('#sl_vongthi').attr('hidden', false);
				    	$('#btn_submit').attr('hidden', false);
				    }
				    
				}
	 			$('#form-search').append("</select>");
	 			$('#btn_submit').attr('hidden', false);
            }
		 })  
		});

		$('#form_search').submit(function(event) {
 			$.ajax({
            url: $(this).prop('action'),
            type: "POST",
		 	data: {		id_hinh_thuc: document.form_search.hinhthucduthi.value,
					 	id_hinh_thuc: document.form_search.vongthi.value,
						id_hinh_thuc: document.form_search.tenchuongtrinh.value
					},
		 	dataType: 'json',
		 	success: function(results){
		 		 alert(results);
            }
		 })  
		return false;	
		});
	});
</script>
@stop