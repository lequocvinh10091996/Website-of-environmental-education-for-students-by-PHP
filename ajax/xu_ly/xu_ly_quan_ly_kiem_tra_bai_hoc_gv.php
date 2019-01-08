<?php
include('config/config.php');
session_start();

if(isset($_POST['them_bai_kiem_tra'])){
    //them
    $id_baihoc = $_SESSION['id_baihoc'];
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

    $sql="insert into quan_ly_kiem_tra_bai_hoc (id_quan_ly_bh,cau_hoi_1,tra_loi_1_ch1,tra_loi_2_ch1,tra_loi_3_ch1,tra_loi_4_ch1,tra_loi_dung_ch1) values 
('$id_baihoc','$cau_hoi_1','$tra_loi_1_ch1','$tra_loi_2_ch1','$tra_loi_3_ch1','$tra_loi_4_ch1','$tra_loi_dung_ch1')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1_gv.php#ajax/bang_nhung_kiem_tra_bai_hoc_gv.php');
}
if(isset($_POST['sua_bai_kiem_tra'])){
    //sua
    $id_kiemtra=$_GET['id_kiemtra'];

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

    $sql="update quan_ly_kiem_tra_bai_hoc set cau_hoi_1='$cau_hoi_1',tra_loi_1_ch1='$tra_loi_1_ch1',tra_loi_2_ch1='$tra_loi_2_ch1',tra_loi_3_ch1='$tra_loi_3_ch1',tra_loi_4_ch1='$tra_loi_4_ch1',tra_loi_dung_ch1='$tra_loi_dung_ch1' where id_quan_ly_ktbh='$id_kiemtra'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1_gv.php#ajax/bang_nhung_kiem_tra_bai_hoc_gv.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_kiemtra=$_GET['id_kiemtra'];
    $sql="delete from quan_ly_kiem_tra_bai_hoc where id_quan_ly_ktbh='$id_kiemtra'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1_gv.php#ajax/bang_nhung_kiem_tra_bai_hoc_gv.php');
}
?>