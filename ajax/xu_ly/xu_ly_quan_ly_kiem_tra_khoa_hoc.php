<?php
include('config/config.php');
session_start();

if(isset($_POST['them_bai_kiem_tra_khoa'])){
    //them
    $id_khoahoc = $_SESSION['id_khoahoc'];
    $hinh_ch=$_FILES['hinh_ch']['name'];
    $hinh_ch_tmp=$_FILES['hinh_ch']['tmp_name'];
    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

    move_uploaded_file($hinh_ch_tmp,'../../quiz/images/'.$hinh_ch);

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];

    $sql="insert into quan_ly_kiem_tra_khoa_hoc (hinh_ch,id_quan_ly_kh,cau_hoi_1,tra_loi_1_ch1,tra_loi_2_ch1,tra_loi_3_ch1,tra_loi_4_ch1,tra_loi_dung_ch1) values 
('$hinh_ch','$id_khoahoc','$cau_hoi_1','$tra_loi_1_ch1','$tra_loi_2_ch1','$tra_loi_3_ch1','$tra_loi_4_ch1','$tra_loi_dung_ch1')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_POST['sua_bai_kiem_tra_khoa'])){
    //sua
    $id_kiemtra_khoa=$_GET['id_kiemtra_khoa'];
    $hinh_ch=$_FILES['hinh_ch']['name'];
    $hinh_ch_tmp=$_FILES['hinh_ch']['tmp_name'];
    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

    move_uploaded_file($hinh_ch_tmp,'../../quiz/images/'.$hinh_ch);

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];
    if($hinh_ch!=''){
        $sql="update quan_ly_kiem_tra_khoa_hoc set hinh_ch='$hinh_ch',cau_hoi_1='$cau_hoi_1',tra_loi_1_ch1='$tra_loi_1_ch1',tra_loi_2_ch1='$tra_loi_2_ch1',tra_loi_3_ch1='$tra_loi_3_ch1',tra_loi_4_ch1='$tra_loi_4_ch1',tra_loi_dung_ch1='$tra_loi_dung_ch1' where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    }else{
        $sql="update quan_ly_kiem_tra_khoa_hoc set cau_hoi_1='$cau_hoi_1',tra_loi_1_ch1='$tra_loi_1_ch1',tra_loi_2_ch1='$tra_loi_2_ch1',tra_loi_3_ch1='$tra_loi_3_ch1',tra_loi_4_ch1='$tra_loi_4_ch1',tra_loi_dung_ch1='$tra_loi_dung_ch1' where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    }

    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_kiemtra_khoa=$_GET['id_kiemtra_khoa'];
    $sql="delete from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
?>