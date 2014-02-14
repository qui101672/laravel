<?php
define("NGUOI_MUON_SV", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "news",
                "ICON" => "icon-home",
                "CHILD"=> null),
           array(
                "MENU_HE_THONG" =>"Mượn-trả sách",
                "LINK" => "borrows",
                "ICON" => "icon-book",
                "CHILD" => array(
                    array(
                        "MENU_HE_THONG" =>"Tra cứu mượn-trả",
                        "ICON" => "icon-book",
                        "LINK" => "tables"),
                    array(
                        "MENU_HE_THONG" =>"Tra cứu sách",
                        "ICON" => "icon-book",
                        "LINK" => "searches"))
               ))));
define("NGUOI_MUON_CB", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "news",
                "ICON" => "icon-home",
                "CHILD"=> null),
           array(
                "MENU_HE_THONG" =>"Mượn-trả sách",
                "LINK" => "borrows",
                "ICON" => "icon-book",
                "CHILD" => array(
                    array(
                        "MENU_HE_THONG" =>"Tra cứu mượn-trả",
                        "ICON" => "icon-book",
                        "LINK" => "tables"),
                    array(
                        "MENU_HE_THONG" =>"Tra cứu sách",
                        "ICON" => "icon-search",
                        "LINK" => "searches"))
            ))));
define("THU_THU", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "news",
                "ICON" => "icon-home",
                "CHILD"=> null
            ),
           array(
                "MENU_HE_THONG" =>"Quản lý mượn-trả",
                "LINK" => "mborrows",
                "ICON" => "icon-shopping-cart",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm phiếu mượn",
                        "ICON" => "icon-shopping-cart",
                        "LINK" => "addborrows"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách phiếu mượn",
                        "ICON" => "icon-shopping-cart",
                        "LINK" => "listborrows"))
            ),
           array(
                "MENU_HE_THONG" =>"Thanh toán cho SV",
                "LINK" => "svpayments",
                "ICON" => "icon-list-alt",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"SV nghỉ học",
                        "ICON" => "icon-list-alt",
                        "LINK" => "dropouts"),
                    array(
                        "MENU_HE_THONG" =>"SV ra trường",
                        "ICON" => "icon-list-alt",
                        "LINK" => "pass"))
            ),
           array(
                "MENU_HE_THONG" =>"Thống kê",
                "LINK" => "ttreports",
                "ICON" => "icon-file",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Các sách trể hẹn",
                        "ICON" => "icon-file",
                        "LINK" => "reports1"),
                    array(
                        "MENU_HE_THONG" =>"Các sách mượn nhiều",
                        "ICON" => "icon-file",
                        "LINK" => "reports2"))
            )
            )));

define("QUAN_LY", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "news",
                "ICON" => "icon-home",
                "CHILD"=> null),
           array(
                "MENU_HE_THONG" =>"QL người dùng",
                "LINK" => "musers",
                "ICON" => "icon-user",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Thêm người dùng",
                        "ICON" => "icon-user",
                        "LINK" => "addusers"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách người dùng",
                        "ICON" => "icon-user",
                        "LINK" => "listusers"))
            ),
           array(
                "MENU_HE_THONG" =>"QL bài viết",
                "ICON" => "icon-list-alt",
                "LINK" => "mthreads",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Thêm bài viết",
                        "ICON" => "icon-list-alt",
                        "LINK" => "addthreads"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách bài viết",
                        "ICON" => "icon-list-alt",
                        "LINK" => "listthreads"))
            ),
           array(
                "MENU_HE_THONG" =>"QL sách",
                "LINK" => "mbooks",
                "ICON" => "icon-book",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Thêm sách mới",
                        "ICON" => "icon-book",
                        "LINK" => "addbooks"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách các sách",
                        "ICON" => "icon-book",
                        "LINK" => "listbooks"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách yêu cầu",
                        "ICON" => "icon-book",
                        "LINK" => "viewrequirs"))
            ),
           array(
                "MENU_HE_THONG" =>"QL hệ thống",
                "LINK" => "mtasks",
                "ICON" => "icon-wrench",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Hoạt động người dùng",
                        "ICON" => "icon-wrench",
                        "LINK" => "taskusers"),
                    array(
                        "MENU_HE_THONG" =>"Backup dữ liệu",
                        "ICON" => "icon-wrench",
                        "LINK" => "backups"))
            )
            )));


