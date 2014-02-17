<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
    <div class="row-fluid actions "></div>   
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <?php
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
        }

        foreach ($menus as $menu) {
            if (is_array($menu["CHILD"])) {
                $count = count($menu["CHILD"]);
                ?>
                <li>
                    <a href='<?php echo asset($menu['LINK']); ?>' class="dropmenu"><i class="<?= $menu['ICON'] ?>"></i><?php echo $menu['MENU_HE_THONG'] ?><span class="label"><?php echo $count; ?></span></a>
                    <ul>
                        <?php
                        $children = $menu["CHILD"];
                        foreach ($children as $child) {
                            ?>
                            <li>
                                <a class="submenu" href='<?php echo asset($menu["LINK"]) . "/" . $child['LINK']; ?>'><i class="<?= $menu['ICON'] ?>"></i><span class="hidden-tablet"><?php echo $child['MENU_HE_THONG'] ?></span></a>
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
                    <a class="submenu" href='<?php echo asset($menu['LINK']); ?>'><i class="<?= $menu['ICON'] ?>"></i><span class="hidden-tablet"><?php echo $menu['MENU_HE_THONG'] ?></span></a>
                </li>
                <?php
            }
        }
        ?>
        </ul>
    </div>
</div>
<!-- end: Main Menu -->