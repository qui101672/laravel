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
                                        <span class="hello">Xin Chào!</span>
                                        <span class="name"><?php echo Auth::user()->username;?></span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">

                                    </li>
                                    <li><a href="<?php echo asset('profile'); ?>"><i class="icon-user"></i>Thông Tin Cá Nhân</a></li>
                                    <li><a href="<?php echo asset('logout'); ?>"><i class="icon-off"></i>Đăng Xuất</a></li>
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