<?php
include('config/config.php');
session_start();

if(isset($_POST['quan_Ly_giao_vien'])){
    //them
    $ten_giao_vien = $_POST['ten_giao_vien'];
    $hinhanh=$_FILES['hinh_anh_giao_vien']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_giao_vien']['tmp_name'];
    $chuyen_nganh_giao_vien=$_POST['chuyen_nganh_giao_vien'];
    $mo_ta_them_giao_vien=$_POST['mo_ta_them_giao_vien'];
    $truong_cua_giao_vien = $_POST['truong_cua_giao_vien'];
    move_uploaded_file($hinhanh_tmp,'uploads/giao_vien/'.$hinhanh);
    $sql="insert into quan_ly_giao_vien (hinh_anh_giao_vien,ten_giao_vien,chuyen_nganh_giao_vien,truong_cua_giao_vien,mo_ta_them_giao_vien) values ('$hinhanh','$ten_giao_vien','$chuyen_nganh_giao_vien','$truong_cua_giao_vien','$mo_ta_them_giao_vien')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_giao_vien.php');
}
if(isset($_POST['sua_giao_vien'])){
    //sua
    $id_giaovien=$_GET['id_giaovien'];
    $ten_giao_vien = $_POST['ten_giao_vien'];
    $hinhanh=$_FILES['hinh_anh_giao_vien']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_giao_vien']['tmp_name'];
    $chuyen_nganh_giao_vien=$_POST['chuyen_nganh_giao_vien'];
    $mo_ta_them_giao_vien=$_POST['mo_ta_them_giao_vien'];
    $truong_cua_giao_vien = $_POST['truong_cua_giao_vien'];
    move_uploaded_file($hinhanh_tmp,'uploads/giao_vien/'.$hinhanh);

    if($hinhanh!=''){
        $sql="update quan_ly_giao_vien set ten_giao_vien='$ten_giao_vien',hinh_anh_giao_vien='$hinhanh',chuyen_nganh_giao_vien='$chuyen_nganh_giao_vien',truong_cua_giao_vien='$truong_cua_giao_vien',mo_ta_them_giao_vien='$mo_ta_them_giao_vien' where id_quan_ly_gv='$id_giaovien'";
    }
    else{
        $sql="update quan_ly_giao_vien set ten_giao_vien='$ten_giao_vien',chuyen_nganh_giao_vien='$chuyen_nganh_giao_vien',truong_cua_giao_vien='$truong_cua_giao_vien',mo_ta_them_giao_vien='$mo_ta_them_giao_vien' where id_quan_ly_gv='$id_giaovien'";
    }
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_giao_vien.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_giaovien=$_GET['id_giaovien'];

    $sql="delete from quan_ly_giao_vien where id_quan_ly_gv='$id_giaovien'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_giao_vien.php');
}
?>