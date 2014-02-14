@extends('layouts.scaffold')

@section('main')
@if ($bai_viets->count())
			@foreach ($bai_viets as $bai_viet)
		<div class="row-fluid">
             <article class="post-container v2">
	            <div class="span3">
	                    <figure class="post-image">
	                        <img src="img/work/9-b.png" alt="alt" />
	                    </figure> <!--end post-image-->
	            </div> <!--end span7-->
	        
	            <div class="span9">
	                <div class="post-content">
	                    <h4 class="title"><a href="#">{{ link_to_route('bai_viets.show', $bai_viet->ten_bai_viet, array($bai_viet->id)) }}</a></h4>
	                    <ul class="unstyled post-meta v2 inline">
	                        <li><i class="icon-user"></i> <span class="info">{{{$bai_viet->id_nguoi_tao_bai_viet}}}</span></li>
	                        <li><i class="icon-calendar"></i> <span class="info">{{{$bai_viet->created_at}}}</span></li>
	                    </ul> <!--end post-meta-->
	                    <p>{{{ $bai_viet->noi_dung_bai_viet }}}</p>
	                    <a href="#" class="read-more" title="Read More ...">Read More &hellip;  &nbsp; &nbsp; <img src="img/read-more.png" alt="img"></a>
	                </div> <!--end post-content-->
	            </div><!-- end span5-->
	        </article> <!--end post-container-->
	         </div> <!--end row-fluid-->
	  			<hr>
			@endforeach
		</tbody>
	</table>
@else
	There are no bai_viets
@endif

@stop
