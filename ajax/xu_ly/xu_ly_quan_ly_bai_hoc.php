<?php
include('config/config.php');
session_start();

if(isset($_POST['quan_Ly_bai_hoc'])){
    //them
    $id_khoahoc = $_POST['ma_khoa_hoc'];
    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
    $lop_khoa_hoc = $_POST['lop_khoa_hoc'];

    if(isset($_SESSION['id_khoahoc'])) {
        $id_khoahoc = $_SESSION['id_khoahoc'];
        $ten_khoa_hoc = $_SESSION['ten_khoa_hoc'];
        $lop_khoa_hoc = $_SESSION['lop_khoa_hoc'];
    }

    $hinhanh=$_FILES['hinh_anh_bai_hoc']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_bai_hoc']['tmp_name'];
    $ten_bai_hoc=$_POST['ten_bai_hoc'];
    $mo_ta_ngan_bai_hoc=$_POST['mo_ta_ngan_bai_hoc'];
    $noi_dung_bai_hoc=$_POST['noi_dung_bai_hoc'];

    if($lop_khoa_hoc=='1'){
        move_uploaded_file($hinhanh_tmp,'uploads/lop_1/'.$hinhanh);
    }
    if($lop_khoa_hoc=='2'){
        move_uploaded_file($hinhanh_tmp,'uploads/lop_2/'.$hinhanh);
    }

    $sql="insert into quan_ly_bai_hoc (id_quan_ly_kh,ten_khoa_hoc,lop_khoa_hoc,hinh_anh_bai_hoc,ten_bai_hoc,mo_ta_ngan_bai_hoc,noi_dung_bai_hoc) values ('$id_khoahoc','$ten_khoa_hoc','$lop_khoa_hoc','$hinhanh','$ten_bai_hoc','$mo_ta_ngan_bai_hoc','$noi_dung_bai_hoc')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_bai_hoc.php');
}
if(isset($_POST['sua_bai_hoc'])){
    //sua
    $id_baihoc=$_GET['id_baihoc'];
    $id_khoahoc = $_POST['ma_khoa_hoc'];
    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
    $lop_khoa_hoc = $_POST['lop_khoa_hoc'];

    $hinhanh=$_FILES['hinh_anh_bai_hoc']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_bai_hoc']['tmp_name'];
    $ten_bai_hoc=$_POST['ten_bai_hoc'];
    $mo_ta_ngan_bai_hoc=$_POST['mo_ta_ngan_bai_hoc'];
    $noi_dung_bai_hoc=$_POST['noi_dung_bai_hoc'];

    move_uploaded_file($hinhanh_tmp,'uploads/lop_'.$lop_khoa_hoc.'/'.$hinhanh);

    if($hinhanh!=''){
        $sql="update quan_ly_bai_hoc set id_quan_ly_kh='$id_khoahoc',ten_khoa_hoc='$ten_khoa_hoc',lop_khoa_hoc='$lop_khoa_hoc',hinh_anh_bai_hoc='$hinhanh',ten_bai_hoc='$ten_bai_hoc',mo_ta_ngan_bai_hoc='$mo_ta_ngan_bai_hoc',noi_dung_bai_hoc='$noi_dung_bai_hoc' where id_quan_ly_bh='$id_baihoc'";
    }
    else{
        $sql="update quan_ly_bai_hoc set id_quan_ly_kh='$id_khoahoc',ten_khoa_hoc='$ten_khoa_hoc',lop_khoa_hoc='$lop_khoa_hoc',ten_bai_hoc='$ten_bai_hoc',mo_ta_ngan_bai_hoc='$mo_ta_ngan_bai_hoc',noi_dung_bai_hoc='$noi_dung_bai_hoc' where id_quan_ly_bh='$id_baihoc'";
    }
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_bai_hoc.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_baihoc=$_GET['id_baihoc'];

    $sql="delete from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_bai_hoc.php');
}
?>