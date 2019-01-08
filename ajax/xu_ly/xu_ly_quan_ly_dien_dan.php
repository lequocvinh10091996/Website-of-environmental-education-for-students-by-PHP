<?php
include('config/config.php');
session_start();

if(isset($_POST['cau_hoi_dien_dan'])){
    //them
    $cau_hoi_dien_dan= $_POST['dat_cau_hoi_dien_dan'];
    $nguoi_hoi_dien_dan=$_SESSION['ho_ten_dang_ky'];
    $sql="insert into quan_ly_dien_dan (nguoi_hoi_dien_dan,cau_hoi_dien_dan) values ('$nguoi_hoi_dien_dan','$cau_hoi_dien_dan')";
    mysqli_query($conn,$sql);
    header('location:../../dien_dan.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_gemail=$_GET['id_gemail'];

    $sql="delete from quan_ly_gui_email where id_quan_ly_gemail='$id_gemail'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_tin_nhan_email.php');
}

if(isset($_GET['destroy'])){
    //huy session
    unset($_SESSION['dang_nhap']);
    unset($_SESSION['ho_ten_dang_ky']);
    unset($_SESSION['id_dang_ky']);
//    session_destroy();
    header('location:../../index.php');
}
?>



