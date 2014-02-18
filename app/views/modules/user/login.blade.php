@if(Auth::check())
@else
<div class="modules"> 
        <center style="margin:10px;">
        	{{ link_to_route('login', 'Đăng Nhập',array(), array('class' => 'btn btn-info')) }}
	        @if(Session::has('flash_notice'))
	        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
		    @endif
		    </center>
		</div>
@endif