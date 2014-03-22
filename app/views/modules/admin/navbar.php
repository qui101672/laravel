   <!-- start: Header -->
    <header class="navbar">
        <div class="container">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
            <a id="main-menu-toggle" class="hidden-xs open">
                <div id="logo" class="cit-logo pull-left"></div>
            </a>        
                
            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown hidden-xs">
                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn account dropdown-toggle" data-toggle="dropdown" href="form-wizard.html#">
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
    </header>
    <!-- end: Header -->