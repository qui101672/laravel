<!-- ============================  Main Nav Start ============================ -->
<div class="main-nav ">
    <div class="navbar">
        <div class="navbar-inner">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
                <ul class="nav pull-left">
                    <li>
                        <a href="<?php echo asset('/') ?>">
                            <i class="icon-home"></i>
                            <span>Trang Chủ</span>  
                        </a>
                    </li>
                    <?php
                    if (Auth::check()) {

                        switch (Auth::user()->PhanQuyen_Id) {
                            case 1:
                                ?>
                                <li >
                                    <a href="<?php echo asset('tai_khoan'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
                                </li>
                                <?php
                                break;
                            case 2:
                                ?>
                                <li >
                                    <a href="<?php echo asset('dang_ky_phieus'); ?>"><i class="icon-edit"></i>Hội Thi</a>
                                </li>
                                <?php
                                break;
                            case 3:
                                ?>
                                <li>
                                    <a href="<?php echo asset('dang_ky_phieus'); ?>"><i class="icon-edit"></i>Hội Thi</a>
                                </li>
                                <?php
                                break;
                            case 4:
                                ?>
                                <li>
                                    <a href="<?php echo asset('quanlydiem'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
                                </li>
                                <?php
                                break;
                            case 5:
                                ?>
                                <li >
                                    <a href="<?php echo asset('quanlydiem'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
                                </li>
                                <?php
                                break;
                            case 6:
                                ?>
                                <li >
                                    <a href="<?php echo asset('chamdiem'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
                                </li>
                                <?php
                                break;
                            case 7:
                                ?>
                                <li >
                                    <a href="<?php echo asset('chamdiem'); ?>"><i class="icon-edit"></i>Trang Quản Trị</a>
                                </li>
                                <?php
                                break;
                        }
                    }
                    ?>

                </ul><!-- end nav -->
                <ul class="nav pull-right">
                    <?php
                    if (Auth::check()) {
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php echo Auth::user()->username; ?> </a>
                            <ul class="dropdown-menu">
                                <li><span class="list-circle"></span> <a href="<?php echo asset('profile'); ?>">Thông Tin Cá Nhân</a></li>
                                <li><span class="list-circle"></span> <a href="#">Lịch Sử Tham Gia</a></li>
                                <li><span class="list-circle"></span> <a href="<?php echo asset('logout'); ?>">Đăng Xuất</a></li>

                            </ul>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div> <!-- end nav-collapse -->
        </div> <!-- end navbar-inner -->
    </div> <!-- end navbar -->
</div> <!-- end main-nav -->

<!-- ============================  Main Nav End ============================ -->