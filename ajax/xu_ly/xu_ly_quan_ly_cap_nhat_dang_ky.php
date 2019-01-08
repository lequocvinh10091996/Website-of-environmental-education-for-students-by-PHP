<?php
include('config/config.php');
session_start();

if(isset($_POST['cap_nhat_dang_ky'])){
    //them
    $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
    if(isset($_POST['truong_cap_nhat_dang_ky'])){
        $truong_cap_nhat_dang_ky= $_POST['truong_cap_nhat_dang_ky'];
        $sql="update quan_ly_dang_ky set truong_dang_ky='$truong_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../chi_tiet_hoc_vien.php');
    }
    if(isset($_POST['lop_cap_nhat_dang_ky'])){
        $lop_cap_nhat_dang_ky= $_POST['lop_cap_nhat_dang_ky'];
        $sql="update quan_ly_dang_ky set lop_dang_ky='$lop_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../chi_tiet_hoc_vien.php');
    }
    if(isset($_POST['ten_cap_nhat_dang_ky'])){
        $_SESSION['ho_ten_dang_ky']=$_POST['ten_cap_nhat_dang_ky'];
        $ten_cap_nhat_dang_ky= $_POST['ten_cap_nhat_dang_ky'];
        $sql="update quan_ly_dang_ky set ho_ten_dang_ky='$ten_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../chi_tiet_hoc_vien.php');
    }
    if(isset($_POST['tai_khoan_cap_nhat_dang_ky'])){
        $tai_khoan_cap_nhat_dang_ky= $_POST['tai_khoan_cap_nhat_dang_ky'];
        $sql="update quan_ly_dang_ky set ten_tai_khoan_dang_ky='$tai_khoan_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../chi_tiet_hoc_vien.php');
    }
    if(isset($_POST['mat_khau_cap_nhat_dang_ky'])){
        $_SESSION['mat_khau_hien_chinh_sua']=$_POST['mat_khau_cap_nhat_dang_ky'];
        $mat_khau_cap_nhat_dang_ky= md5($_POST['mat_khau_cap_nhat_dang_ky']);
        $sql="update quan_ly_dang_ky set mat_khau_dang_ky='$mat_khau_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../chi_tiet_hoc_vien.php');
    }

    if(isset($_POST['nap_tien_cap_nhat_dang_ky'])){
        $ma_nap_tien=$_POST['nap_tien_cap_nhat_dang_ky'];
        if(substr( $ma_nap_tien,  0, 3)=='nap') {
            if(isset($_SESSION['ten_nguoi_nt'])){
                if($ho_ten_dang_ky==$_SESSION['ten_nguoi_nt']){
                    $sql = "select * from quan_ly_dang_ky where ho_ten_dang_ky='$ho_ten_dang_ky'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                    $nap_tien_cap_nhat_dang_ky = $dong['so_tien_dang_ky'] + 500;
                    $sql = "update quan_ly_dang_ky set so_tien_dang_ky='$nap_tien_cap_nhat_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
                    mysqli_query($conn, $sql);
                    header('location:../../chi_tiet_hoc_vien.php');
                    unset($_SESSION['ten_nguoi_nt']);
                    unset($_SESSION['duyet_nap_tien']);
                }
                else{
                    $_SESSION['nap_tien_sai']='nap_tien_sai';
                    header('location:../../chi_tiet_hoc_vien.php');
                }
            }else{
                $_SESSION['nap_tien_sai']='nap_tien_sai';
                header('location:../../chi_tiet_hoc_vien.php');
            }

        }
        else{
            $_SESSION['nap_tien_sai']='nap_tien_sai';
            header('location:../../chi_tiet_hoc_vien.php');
        }
    }

}
if(isset($_GET['xoa'])){
    //xoa
    $id_dangky=$_GET['id_dangky'];

    $sql="delete from quan_ly_dang_ky where id_quan_ly_dk='$id_dangky'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_dang_ky.php');
}

if(isset($_GET['destroy'])){
    //huy session
    unset($_SESSION['dang_ky']);
    unset($_SESSION['ho_ten_dang_ky']);
//    session_destroy();
    header('location:../../index.php');
}
?>



