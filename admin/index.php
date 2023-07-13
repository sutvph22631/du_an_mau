<?php
include_once "../model/pdo.php";
include_once "../model/danhmuc.php";
include_once "../model/sanpham.php";
include_once "../model/taikhoan.php";
include_once "../model/binhluan.php";
include_once "../model/thongke.php";
include_once "header.php";
// controller
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'adddm':
      // kiểm tra người dùng bấm hay ko
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $tenloai = $_POST['tenloai'];
        insert_danhmuc($tenloai);
        $thongbao = "Thêm Thành Công";
      }

      include_once "danhmuc/add.php";
      break;
    case 'listdm':
      $sql = "SELECT *FROM danhmuc order by id desc";
      $listdanhmuc = loadall_danhmuc();
      include_once "danhmuc/list.php";
      break;
    case 'xoadm':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_danhmuc($_GET['id']);
      }
      $sql = "SELECT *FROM danhmuc order by id desc";
      $listdanhmuc = loadall_danhmuc();
      include_once "danhmuc/list.php";
      break;
    case 'suadm':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $dm = loadone_danhmuc($_GET['id']);
      }
      include_once "danhmuc/update.php";
      break;
    case 'updatedm':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $tenloai = $_POST['tenloai'];
        $id = $_POST['id'];
        update_danhmuc($id, $tenloai);
        $thongbao = "Cập Nhật  Thành Công";
      }
      $sql = "SELECT *FROM danhmuc order by id desc";
      $listdanhmuc = loadall_danhmuc();
      include_once "danhmuc/list.php";

      break;
      // sản phẩm
    case 'addsp':
      // kiểm tra người dùng bấm hay ko
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $filename = $_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
        } else {
        }
        insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
        $thongbao = "Thêm Thành Công";
      }
      $listdanhmuc = loadall_danhmuc();
      include_once "sanpham/add.php";
      break;
    case 'listsp':
      if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
      }else{
        $kyw="";
        $iddm=0;
      }
      $listdanhmuc = loadall_danhmuc();
      $listsanpham = loadall_sanpham($kyw,$iddm);
      include_once "sanpham/list.php";
      break;
    case 'xoasp':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_sanpham($_GET['id']);
      }
      $listsanpham = loadall_sanpham();
      include_once "sanpham/list.php";
      break;
    case 'suasp':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $sanpham = loadone_sanpham($_GET['id']);
      }
      $listdanhmuc = loadall_danhmuc();
      include_once "sanpham/update.php";
      break;
    case 'updatesp':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $id = $_POST['id'];
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $filename = $_FILES['hinh']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
        } else {
        }
        update_sanpham($iddm, $tensp,$giasp,$mota,$filename,$id);
        $thongbao = "Cập Nhật  Thành Công";
      }
      $listdanhmuc = loadall_danhmuc();
      $listsanpham = loadall_sanpham("",0);
      include_once "sanpham/list.php";

      break;

     case 'dskh':
      $listtaikhoan=loadall_taikhoan();
      include_once "taikhoan/list.php";
      break;
      // tài khoản
      case 'xoatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_taikhoan($_GET['id']);
        }
        $sql = "SELECT *FROM taikhoan order by id desc";
        $listtaikhoan = loadall_taikhoan();
        include_once "taikhoan/list.php";
        break;
      case 'suatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $tk = loadone_taikhoan($_GET['id']);
        }
        include_once "taikhoan/update.php";
        break;
        case 'addtk':
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
              $user = $_POST['user'];
              $pass = $_POST['password'];
              $email = $_POST['email'];
              insert_taikhoan($user, $pass, $email);
              $thongbao = "Đã thêm thành công";
              header('location:index.php?act=dskh');
          }
          include_once "taikhoan/add.php";
          break;
          case 'updatetk':
            if (isset($_POST['capnhat']) ){
              
              $user = $_POST['user'];
              $pass = $_POST['password'];
              $email = $_POST['email'];
              $id = $_POST['id'];
              update_taikhoan($id, $user,$pass,$email);
              $thongbao = "Cập Nhật  Thành Công";
            }
            $sql = "SELECT *FROM taikhoan order by id desc";
            $listtaikhoan = loadall_taikhoan();
            include_once "taikhoan/list.php";
      
            break;
      case 'dsbl':
        $listbinhluan=load_bl();

      include_once "binhluan/list.php";
        break;
        case 'xoabl':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_binhluan($_GET['id']);
          }
          $sql = "SELECT *FROM binhluan order by id desc";
          $listbinhluan = load_bl();
          include_once "binhluan/list.php";
          break;

        case 'thongke':
          $listthongke=loadall_thongke();
          include_once "thongke/list.php";

          break; 
        
          case 'bieudo':
            $listthongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;
    default:
      include_once "home.php";
      break;
  }
} else {
  include_once "home.php";
}

include_once "footer.php";
