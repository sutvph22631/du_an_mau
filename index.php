<?php
session_start();
include_once "model/pdo.php";
include_once "model/danhmuc.php";
include_once "model/sanpham.php";
include_once "model/taikhoan.php";
include_once "view/header.php";
include_once "global.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include_once "view/sanpham.php";
            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = loadone_sanpham_cungloai($id, $iddm);
                include_once "view/sanphamct.php";
            } else {
                include_once "view/home.php";
            }

            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                insert_taikhoan($user, $pass, $email);
                $thongbao = "Đã đăng ký thành công";
            }
            include_once "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Đã đăng nhập thành công";
                    header('location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include_once "view/taikhoan/dangky.php";
            break;

        case 'thoat':
             session_unset();
            header('location:index.php');
            break;   
            
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) { 
                $email = $_POST['email'];
                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                    $thongbao="mật khẩu của bạn là: ".$checkemail['password'];
                }else{
                    $thongbao="email này không tồn tại";
                }
            }
            include_once "view/taikhoan/quen_mk.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id=$_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['password'];
                $email=$_POST['email'];
                update_taikhoan($id, $user,$pass,$email);
                
                $_SESSION['user']=checkuser($user,$pass);
                
                header("location:index.php?act=edit_taikhoan");
               
            }
            include_once "view/taikhoan/edit_taikhoan.php";
            break;
        case 'gioithieu':
            include_once "view/gioithieu.php";
            break;
        case 'lienhe':
            include_once "view/lienhe.php";
            break;

        default:
            include_once "view/home.php";
            break;
    }
} else {
    include_once "view/home.php";
}

include_once "view/footer.php";
