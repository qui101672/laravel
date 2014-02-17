<div class="modules"> 
        <center style="margin:10px;">@if(Auth::check())
            <p>Xin Chào! {{Auth::user()->username;}}</p>
            {{ link_to_route('logout', 'Đăng Xuất',array(), array('class' => 'btn btn-info')) }}
        @else
            {{ link_to_route('login', 'Đăng Nhập',array(), array('class' => 'btn btn-info')) }}
        @endif

    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif</center>
</div>