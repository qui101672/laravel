@extends('layouts.scaffold')

@section('main')
@if ($bai_viet->count())
	@foreach ($bai_viet as $bai_viet)
		<div class="row-fluid">
             <article class="post-container v2">
	            <div class="span3">
	                    <figure class="post-image">
	                        <img src="<?php echo asset('public/user/img/expertise/graduate.png')?>" alt="alt" />
	                    </figure> <!--end post-image-->
	            </div> <!--end span7-->
	        
	            <div class="span9">
	                <div class="post-content">
	                    <h4 class="title">{{ link_to_route('tin_tuc.show', $bai_viet->tieu_de_bai_viet, array($bai_viet->id)) }}</a></h4>
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

	                    <div style="float:right;">{{ link_to_route('tin_tuc.show', 'Chi Tiết ....	', array($bai_viet->id)) }}
	                    </div>
	                    
	                </div> <!--end post-content-->
	            </div><!-- end span5-->
	        </article> <!--end post-container-->
	    </div> <!--end row-fluid--><hr>			
	@endforeach
		</tbody>
	</table>
@else
	There are no bai_viet
@endif

@stop
