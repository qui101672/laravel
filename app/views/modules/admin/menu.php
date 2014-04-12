<!-- start: Main Menu -->
<div id="sidebar-left" class="col-lg-2 col-sm-1">

    <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <?php
            if (Auth::check()) {
                $getroutename = Route::currentRouteName();
                if (trim($getroutename) == 'index') {
                    $getroutename = 'news';
                }
                switch (Auth::user()->PhanQuyen_Id) {
                    case 1: $menus = unserialize(ADMIN);
                        break;
                    case 2: $menus = unserialize(SINH_VIEN);
                        break;
                    case 3: $menus = unserialize(CAN_BO);
                        break;
                    case 4: $menus = unserialize(QUAN_LY);
                        break;
                    case 5: $menus = unserialize(BAN_TO_CHUC);
                        break;
                    case 6: $menus = unserialize(BAN_GIAM_KHAO);
                        break;
                }
                foreach ($menus as $menu) {
                    if (is_array($menu["CHILD"])) {
                        $count = count($menu["CHILD"]);
                        ?>
                        <li>
                            <a href='<?php echo asset($menu['LINK']); ?>' class="dropmenu">
                                <i class="<?= $menu['ICON'] ?>"></i>
                                <span class='hidden-sm'><?php echo $menu['MENU_HE_THONG'] ?></span>
                                <span class="label"><?php echo $count; ?></span>
                            </a>
                            <ul>
                                <?php
                                $children = $menu["CHILD"];
                                foreach ($children as $child) {
                                    ?>
                                    <li>
                                        <a class="submenu" href='<?php echo asset($menu["LINK"]) . "/" . $child['LINK']; ?>'>
                                            <i class="<?= $child['ICON'] ?>"></i>
                                            <span class="hidden-sm"><?php echo $child['MENU_HE_THONG'] ?></span>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li <?php
                        if (strpos($getroutename, $menu['LINK']) !== false) {
                            echo 'class="active"';
                        } else {
                            echo '';
                        }
                        ?>>
                            <a class="submenu" href='<?php echo asset($menu['LINK']); ?>'>
                                <i class="<?= $menu['ICON'] ?>"></i>
                                <span class="hidden-tabmslet"><?php echo $menu['MENU_HE_THONG'] ?></span>
                            </a>
                        </li>
                        <?php
                    }
                }
            }
            ?>   
        </ul>
    </div>
</div>
<!-- end: Main Menu -->


