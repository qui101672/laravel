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
        <title>Hệ Thống Quản Lý Văn Nghệ Trường Đại Học Cần Thơ</title>
        <meta name="viewport" content="width=device-width">
        <!-- Bootstrap Styles -->
        <link href="<?php echo asset('public/user/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset('public/user/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
        <!-- Font Icons -->
        <link rel="stylesheet" href="<?php echo asset('public/user/css/font-awesome.min.css'); ?>" />
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
                <div class="modules"  > 
                    @yield('main')
                </div>
            </div> <!--end span8-->
            <div class="span3">
                @include('modules.user.login')
                @include('modules.user.theloaibaiviet')
            </div>
        </div>  
        @include('modules.user.footer')
        <script src="<?php echo asset('public/user/js/jquery-1.10.2.min.js'); ?>"></script>
        <script>window.jQuery || document.write('<script src="<?php echo asset('public/user/js/libraries/jquery.min.js'); ?>"><\/script>')</script> 
        <script src="<?php echo asset('public/user/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo asset('public/user/js/libraries/plugins.js'); ?>"></script>
        <script src="<?php echo asset('public/user/js/main.js'); ?>"></script>
    </div>
</body>
</html>