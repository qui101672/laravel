<?php
/**
 * @author lioxca
 * @copyright 2012
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>He Thong</title>

        <!-- Bootstrap Styles -->
        <link href="<?php echo asset('public/user/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('public/user/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">

        <!-- Font Icons -->
        <link rel="stylesheet" href="<?php echo asset('public/user/css/font-awesome.min.css'); ?>" />

        <!-- Google Fonts -->


        <!-- Main Styles -->
        <link rel="stylesheet" href="<?php echo asset('public/user/css/styles.css'); ?>" />


        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo asset('public/user/img/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo asset('public/user/img/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo asset('public/user/img/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo asset('public/user/img/apple-touch-icon-57-precomposed.png'); ?>">
        <link rel="shortcut icon" href="<?php echo asset('favicon.png'); ?>">

        <!-- Modernizr Feature Detection  -->
        <script src="<?php echo asset('public/user/js/libraries/modernizr.min.js'); ?>"></script>
    </head>

    <body>
		@include('modules.user.header')
		@include('modules.user.banner')
		@include('modules.user.menu')
        <!-- ============================  Main Tagline Start ============================ -->
        <div class="row-fluid">
            <div class="span9">
                <div style="background-color: #fff;
                            background-image: none;
                            border: 1px solid #dde0e3;
                            filter: none;
                            box-shadow: none;
                            padding: 10px;
                            margin: 0px 0px 10px 0px;"  > 
					@yield('main')
                </div>
            </div> <!--end span8-->
            <div class="span3">
            <div style="background-color: #fff;
                            background-image: none;
                            border: 1px solid #dde0e3;
                            filter: none;
                            box-shadow: none;  
                            "> 
                <ul>
                    
                    @if(Auth::check())
                        <p>Xin Chào! {{Auth::user()->username;}}</p>
                        {{ link_to_route('logout', 'Đăng Xuất',array(), array('class' => 'btn btn-info')) }}
                    @else
                        {{ link_to_route('login', 'Đăng Nhập',array(), array('class' => 'btn btn-info')) }}
                    @endif
                </ul>

                @if(Session::has('flash_notice'))
                    <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
                @endif
            </div>
                

            </div>
        </div>  

        @include('modules.user.footer')
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="<?php echo asset('public/user/js/libraries/jquery.min.js');?>"><\/script>')</script> 
			<script src="<?php echo asset('public/user/js/bootstrap.min.js');?>"></script>
			<script src="<?php echo asset('public/user/js/libraries/plugins.js');?>"></script>
			<script src="<?php echo asset('public/user/js/main.js');?>"></script>

        </div>
    </body>
</html>