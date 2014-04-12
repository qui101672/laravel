<?php

define("ADMIN", serialize(array
    (
    array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Tra Cứu",
        "LINK" => null,
        "ICON" => "icon-search",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thông Tin SV/CB",
                "ICON" => "icon-info-sign",
                "LINK" => "../tracuu/thongtinsvcb"),
            array(
                "MENU_HE_THONG" => "Thông Tin Hội Thi",
                "ICON" => "icon-info-sign",
                "LINK" => "../tracuu/hoithi"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Danh Mục",
        "LINK" => null,
        "ICON" => "icon-search",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Mục Hội Thi",
                "ICON" => "icon-info-sign",
                "LINK" => "../danh_muc_hoi_thi"),
            array(
                "MENU_HE_THONG" => "Danh Mục Năm",
                "ICON" => "icon-info-sign",
                "LINK" => "../danh_muc_nams"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Kho Nhạc",
        "LINK" => null,
        "ICON" => "icon-music",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm Bài Hát",
                "ICON" => "icon-edit",
                "LINK" => "../bai_hats/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Bài Hát",
                "ICON" => "icon-align-justify",
                "LINK" => "../bai_hats"),
            array(
                "MENU_HE_THONG" => "Thêm Tác Giả",
                "ICON" => "icon-edit",
                "LINK" => "../tac_gias/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Tác Giả",
                "ICON" => "icon-align-justify",
                "LINK" => "../tac_gias"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Bài Viết",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../bai_viet/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách bài viết",
                "ICON" => "icon-align-justify",
                "LINK" => "../bai_viet"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Đơn Vị",
        "LINK" => null,
        "ICON" => "icon-group",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm Đơn Vị",
                "ICON" => "icon-group",
                "LINK" => "../don_vi/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Đơn Vị",
                "ICON" => "icon-align-justify",
                "LINK" => "../don_vi"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Hội Thi",
        "LINK" => null,
        "ICON" => "icon-star-empty",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Khởi Tạo Hội Thi",
                "ICON" => "icon-star-empty",
                "LINK" => "../hoi_this/create"),
            array(
                "MENU_HE_THONG" => "BGK/Thư Ký",
                "ICON" => "icon-group",
                "LINK" => "../ban_giam_khaos"),
            array(
                "MENU_HE_THONG" => "Ban Tổ Chức",
                "ICON" => "icon-group",
                "LINK" => "../ban_to_chuc"),
            array(
                "MENU_HE_THONG" => "Danh Sách Hội Thi",
                "ICON" => "icon-align-justify",
                "LINK" => "../hoi_this"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Lớp",
        "LINK" => null,
        "ICON" => "icon-user",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm Lớp",
                "ICON" => "icon-edit",
                "LINK" => "../lop/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Lớp",
                "ICON" => "icon-align-justify",
                "LINK" => "../lop"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Ngành",
        "LINK" => null,
        "ICON" => "icon-user",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm Ngành",
                "ICON" => "icon-edit",
                "LINK" => "../nganh/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Ngành",
                "ICON" => "icon-align-justify",
                "LINK" => "../nganh"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Tài Khoản",
        "LINK" => "tai_khoan",
        "ICON" => "icon-edit",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý  Thể Loại Bài Viết",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm Thể Loại bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../the_loai_bai_viet/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách Thể Loại bài viết",
                "ICON" => "icon-align-justify",
                "LINK" => "../the_loai_bai_viet"))
    )
)));

define("SINH_VIEN", serialize(array
    (array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Đăng Ký Thi",
        "LINK" => "dang_ky_phieus/create",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Phiếu Đăng Ký",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../dang_ky_phieus")
        )
    )
)));
define("CAN_BO", serialize(array
    (array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Tra Cứu",
        "LINK" => null,
        "ICON" => "icon-user",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thông Tin Sinh Viên",
                "ICON" => "icon-edit",
                "LINK" => "../tracuu/thongtinsvcb"),
            array(
                "MENU_HE_THONG" => "Thông Tin Hội Thi",
                "ICON" => "icon-edit",
                "LINK" => "../tracuu/hoithi"))
    ),
    array(
        "MENU_HE_THONG" => "Đăng Ký Thi",
        "LINK" => "dang_ky_phieus/create",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Phiếu Đăng Ký",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../dang_ky_phieus")
        )
    )
)));
define("QUAN_LY", serialize(array
    (array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Bài Viết",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../bai_viet/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../bai_viet"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Điểm",
        "LINK" => "",
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Xét Duyệt Điểm",
                "ICON" => "icon-edit",
                "LINK" => "../quanlydiem"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Phiếu Đăng Ký",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../phieu_dang_kies"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Trao Giải",
        "LINK" => null,
        "ICON" => "icon-star",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../traogiaitietmuc"))
    )
)));
define("BAN_GIAM_KHAO", serialize(array
    (array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Chấm Diểm",
        "LINK" => "",
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Chấm Điểm",
                "ICON" => "icon-edit",
                "LINK" => "../chamdiem"),
            array(
                "MENU_HE_THONG" => "Danh Sách Đã Chấm",
                "ICON" => "icon-edit",
                "LINK" => "../dstietmucdachamdiem"))
    )
)));
define("BAN_TO_CHUC", serialize(array
    (array(
        "MENU_HE_THONG" => "Trang chủ",
        "LINK" => "/",
        "ICON" => "icon-home",
        "CHILD" => null
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Bài Viết",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Thêm bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../bai_viet/create"),
            array(
                "MENU_HE_THONG" => "Danh Sách bài viết",
                "ICON" => "icon-edit",
                "LINK" => "../bai_viet"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Điểm",
        "LINK" => "",
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Xét Duyệt Điểm",
                "ICON" => "icon-edit",
                "LINK" => "../quanlydiem"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Phiếu Đăng Ký",
        "LINK" => null,
        "ICON" => "icon-edit",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../phieu_dang_kies"))
    ),
    array(
        "MENU_HE_THONG" => "Quản Lý Trao Giải",
        "LINK" => null,
        "ICON" => "icon-star",
        "CHILD" => array(
            array(
                "MENU_HE_THONG" => "Danh Sách Phiếu",
                "ICON" => "icon-edit",
                "LINK" => "../traogiaitietmuc"))
    )
)));
