<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8" />
        <title>HeTHong</title>
        <meta name="description" content="He Thong Quan Ly Van Nghe Truong Dai Hoc Can Tho" />
        <meta name="author" content="Nguyen Ngoc Qui" />
        <meta name="keyword" content="van nghe, he thong, qua ly van nghe, dai hoc can tho" />
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link href="<?php echo asset('public/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo asset('public/admin/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo asset('public/admin/css/style.min.css '); ?>" rel="stylesheet" />
        <link href="<?php echo asset('public/admin/css/style-responsive.min.css'); ?>" rel="stylesheet" />
        <link href="<?php echo asset('public/admin/css/retina.css'); ?>" rel="stylesheet" />
        <!-- end: CSS -->


        <!-- start: Favicon and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo asset('public/admin/ico/apple-touch-icon-144-precomposed.png'); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo asset('public/admin/ico/apple-touch-icon-114-precomposed.png'); ?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo asset('public/admin/ico/apple-touch-icon-72-precomposed.png'); ?>" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo asset('public/admin/ico/apple-touch-icon-57-precomposed.png'); ?>" />
        <link rel="shortcut icon" href="<?php echo asset('public/admin/favicon.ico'); ?>" />
        <!-- end: Favicon and Touch Icons -->   

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a id="main-menu-toggle" class="hidden-phone open">
                        <div id="logo" class="cit-logo pull-left"></div>
                    </a>    


                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
                                    <div class="avatar"><img src="<?php echo asset('public/admin/img/avatar.jpg'); ?>" alt="Avatar" /></div>
                                    <div class="user">
                                        <span class="hello">Welcome!</span>
                                        <span class="name">Nguyễn Ngọc Qui</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">

                                    </li>
                                    <li><a href="#"><i class="icon-user"></i>Thông Tin Cá Nhân</a></li>
                                    <li><a href="#"><i class="icon-off"></i>Đăng Xuất</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->
                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">
                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="row-fluid actions"></div>   
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li>
                                <a class="dropmenu" href="#">
                                    <i class="icon-tags"></i>
                                    <span class="hidden-tablet">Quản Lý Danh Mục</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropmenu" href="#">
                                    <i class="icon-music"></i>
                                    <span class="hidden-tablet">Quản Lý Bài Viết</span>
                                </a>    
                            </li>
                            <li>
                                <a class="dropmenu" href="#">
                                    <i class="icon-star"></i>
                                    <span class="hidden-tablet">Quản Lý Hội Thi</span>
                                    <span class="label"><i class=" icon-share-alt"></i></span>
                                </a>
                                <ul>
                                    <li><a class="submenu" href="#"><i class="icon-list"></i><span class="hidden-tablet">Thá»ƒ Loáº¡i</span></a></li>
                                    <li><a class="submenu" href="#"><i class="icon-spinner"></i><span class="hidden-tablet">VÃ²ng Thi</span></a></li> 
                                    <li><a class="submenu" href="#"><i class="icon-trophy"></i><span class="hidden-tablet">Giáº£i ThÆ°á»Ÿng</span></a></li>
                                    <li><a class="submenu" href="#"><i class="icon-group"></i><span class="hidden-tablet">ThÃ nh ViÃªn BTC</span></a></li>
                                </ul>   
                            </li>
                            <li>
                                <a class="dropmenu" href="#">
                                    <i class="icon-user"></i>
                                    <span class="hidden-tablet">Quản Lý Người Dùng</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <!-- start: Content -->
                <div id="content" class="span10">

                    <div class="row-fluid">
                        <div class="box span10">
                            <div class="box-header">
                                
                            </div>
                            <div class="box-content">
                                @yield('main')                                
                            </div>
                        </div>
                    </div>
                    <!-- end: Content -->

                </div><!--/fluid-row-->

                <div class="modal hide fade" id="myModal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">Ã—</button>
                        <h3>Settings</h3>
                    </div>
                    <div class="modal-body">
                        <p>Here settings can be configured...</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary">Save changes</a>
                    </div>
                </div>

                <div class="clearfix"></div>

                <footer>
                    <p>
                        <span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a></span>
                        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co" alt="Bootstrap Admin Templates">SimpliQ</a></span>
                    </p>

                </footer>

            </div><!--/.fluid-container-->

            <!-- start: JavaScript-->
            <script src="<?php echo asset('public/admin/js/jquery-1.10.2.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery-migrate-1.2.1.min.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/jquery-ui-1.10.3.custom.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.ui.touch-punch.js') ?>"></script>    
            <script src="<?php echo asset('public/admin/js/modernizr.js') ?>"></script>    
            <script src="<?php echo asset('public/admin/js/bootstrap.min.js') ?>"></script>    
            <script src="<?php echo asset('public/admin/js/jquery.cookie.js') ?>"></script>    
            <script src="<?php echo asset('public/admin/js/fullcalendar.min.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/jquery.dataTables.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/excanvas.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.flot.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.flot.pie.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.flot.stack.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.flot.resize.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.flot.time.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.chosen.min.js') ?>"></script>    
            <script src="<?php echo asset('public/admin/js/jquery.uniform.min.js') ?>"></script>       
            <script src="<?php echo asset('public/admin/js/jquery.cleditor.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.noty.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.elfinder.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.raty.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.iphone.toggle.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/jquery.uploadify-3.1.min.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/jquery.gritter.min.js') ?>"></script>   
            <script src="<?php echo asset('public/admin/js/jquery.imagesloaded.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/jquery.masonry.min.js') ?>"></script>   
            <script src="<?php echo asset('public/admin/js/jquery.knob.modified.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/jquery.sparkline.min.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/counter.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/raphael.2.1.0.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/justgage.1.0.1.min.js') ?>"></script>   
            <script src="<?php echo asset('public/admin/js/jquery.autosize.min.js') ?>"></script>  
            <script src="<?php echo asset('public/admin/js/retina.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/jquery.placeholder.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/wizard.min.js') ?>"></script>
            <script src="<?php echo asset('public/admin/js/core.min.js') ?>"></script> 
            <script src="<?php echo asset('public/admin/js/charts.min.js') ?>"></script>   
            <script src="<?php echo asset('public/admin/js/custom.min.js') ?>"></script>
            <!-- end: JavaScript-->

    </body>
</html>