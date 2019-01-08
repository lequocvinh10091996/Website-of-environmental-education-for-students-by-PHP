<?php
include('config/config.php');
session_start();

if(isset($_POST['them_bai_kiem_tra_khoa'])){
    //them
    $id_khoahoc = $_SESSION['id_khoahoc'];
    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];

    $sql="insert into quan_ly_kiem_tra_khoa_hoc (id_quan_ly_kh,cau_hoi_1,tra_loi_1_ch1,tra_loi_2_ch1,tra_loi_3_ch1,tra_loi_4_ch1,tra_loi_dung_ch1) values 
('$id_khoahoc','$cau_hoi_1','$tra_loi_1_ch1','$tra_loi_2_ch1','$tra_loi_3_ch1','$tra_loi_4_ch1','$tra_loi_dung_ch1')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_POST['sua_bai_kiem_tra_khoa'])){
    //sua
    $id_kiemtra_khoa=$_GET['id_kiemtra_khoa'];

    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];

    $sql="update quan_ly_kiem_tra_khoa_hoc set cau_hoi_1='$cau_hoi_1',tra_loi_1_ch1='$tra_loi_1_ch1',tra_loi_2_ch1='$tra_loi_2_ch1',tra_loi_3_ch1='$tra_loi_3_ch1',tra_loi_4_ch1='$tra_loi_4_ch1',tra_loi_dung_ch1='$tra_loi_dung_ch1' where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_ktck=$_GET['id_ktck'];
    $sql="delete from quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa where id_quan_ly_ktck='$id_ktck'";
    mysqli_query($conn,$sql);
    unset($_SESSION['id_quan_ly_kh_duyet']);
    unset($_SESSION['ho_ten_dang_ky_duyet']);
    header('location:../../index_v1.php#ajax/bang_nhung_trang_thai_bai_kiem_tra_cuoi_khoa.php');
}
//$_SESSION['id_quan_ly_kh_duyet']=0;
//$_SESSION['ho_ten_dang_ky_duyet']=0;
?>