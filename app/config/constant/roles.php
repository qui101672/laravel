<?php
define("ADMIN", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "/",
                "ICON" => "icon-home",
                "CHILD"=> null
            ),
           array(
                "MENU_HE_THONG" =>"Quản lý Bài Viết",
                "LINK" => "bai_viet",
                "ICON" => "icon-edit",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm bài viết",
                        "ICON" => "icon-edit",
                        "LINK" => "create"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách bài viết",
                        "ICON" => "icon-edit",
                        "LINK" => ""))
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

define("SINH_VIEN", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "/",
                "ICON" => "icon-home",
                "CHILD"=> null
            ),
           array(
                "MENU_HE_THONG" =>"SINH_VIEN",
                "LINK" => "bai_viets",
                "ICON" => "icon-edit",
                "CHILD"=>  array(
                    )
            )
            )));
define("CAN_BO", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "/",
                "ICON" => "icon-home",
                "CHILD"=> null
            ),
           array(
                "MENU_HE_THONG" =>"CAN_BO",
                "LINK" => "bai_viets",
                "ICON" => "icon-edit",
                "CHILD"=>  array(
                    )
            )
            )));
define("QUAN_LY", 
        serialize(array 
            (array(
                "MENU_HE_THONG" =>"Trang chủ",
                "LINK" => "/",
                "ICON" => "icon-home",
                "CHILD"=> null
            ),
           array(
                "MENU_HE_THONG" =>"QUAN_LY",
                "LINK" => "bai_viets",
                "ICON" => "icon-edit",
                "CHILD"=>  array(
                    )
            )
            )));