<?php
define("ADMIN", 
        serialize(array 
            (
            array(
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
                "MENU_HE_THONG" =>"Quản lý  Thể Loại Bài Viết",
                "LINK" => "the_loai_bai_viet",
                "ICON" => "icon-edit",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm Thể Loại bài viết",
                        "ICON" => "icon-edit",
                        "LINK" => "create"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách Thể Loại bài viết",
                        "ICON" => "icon-edit",
                        "LINK" => ""))
            ),

           array(
                "MENU_HE_THONG" =>"Quản lý Tài Khoản",
                "LINK" => "tai_khoan",
                "ICON" => "icon-edit",
                "CHILD"=>  null
            ),
           array(
                "MENU_HE_THONG" =>"Quản Lý Hội Thi",
                "LINK" => "hoi_thi",
                "ICON" => "icon-list-alt",
                "CHILD"=> array(
                    array(
                        "MENU_HE_THONG" =>"Khởi Tạo Hội Thi",
                        "ICON" => "icon-list-alt",
                        "LINK" => ""),
                    array(
                        "MENU_HE_THONG" =>"Tạo Thành Viên BGK",
                        "ICON" => "icon-list-alt",
                        "LINK" => ""),
                    array(
                        "MENU_HE_THONG" =>"Tạo Thành Viên BTC",
                        "ICON" => "icon-list-alt",
                        "LINK" => ""),
                    array(
                        "MENU_HE_THONG" =>"Tạo Thành Viên BGK",
                        "ICON" => "icon-list-alt",
                        "LINK" => ""))
            ),
            array(
                "MENU_HE_THONG" =>"Quản lý Đơn Vị",
                "LINK" => "don_vi",
                "ICON" => "icon-user",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm Đơn Vị",
                        "ICON" => "icon-edit",
                        "LINK" => "create"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách Đơn Vị",
                        "ICON" => "icon-edit",
                        "LINK" => ""))
            ),
            array(
                "MENU_HE_THONG" =>"Quản lý Lớp",
                "LINK" => "lop",
                "ICON" => "icon-user",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm Lớp",
                        "ICON" => "icon-edit",
                        "LINK" => "create"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách Lớp",
                        "ICON" => "icon-edit",
                        "LINK" => ""))
            ),
            array(
                "MENU_HE_THONG" =>"Quản lý Ngành",
                "LINK" => "nganh",
                "ICON" => "icon-user",
                "CHILD"=>  array(
                    array(
                        "MENU_HE_THONG" =>"Thêm Ngành",
                        "ICON" => "icon-edit",
                        "LINK" => "create"),
                    array(
                        "MENU_HE_THONG" =>"Danh sách Ngành",
                        "ICON" => "icon-edit",
                        "LINK" => ""))
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