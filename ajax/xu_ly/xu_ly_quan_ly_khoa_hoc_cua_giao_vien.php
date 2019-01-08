<?php
include('config/config.php');
session_start();

if(isset($_POST['quan_Ly_khoa_hoc_cua_giao_vien'])){
    //them
    $ten_giao_vien = $_POST['ten_giao_vien'];
    $ten_khoa_hoc= $_POST['ten_khoa_hoc'];

    $sql = "select * from quan_ly_khoa_hoc_cua_giao_vien";
    $run = mysqli_query($conn, $sql);
    $temp=0;
    while($dong=mysqli_fetch_array($run)) {
        if($dong['ten_khoa_hoc']==$ten_khoa_hoc){
            $temp=1;
        }
    }
    if($temp==0){
        $sql="insert into quan_ly_khoa_hoc_cua_giao_vien (ten_giao_vien,ten_khoa_hoc) values ('$ten_giao_vien','$ten_khoa_hoc')";
        mysqli_query($conn,$sql);
        header('location:../../index_v1.php#ajax/bang_khoa_hoc_cua_giao_vien.php');
    }
    if($temp==1){
        header('location:../../index_v1.php#ajax/quan_ly_khoa_hoc_cua_giao_vien.php');
        $_SESSION['ton_tai_kh_cua_gv']='ton_tai_kh_cua_gv';
    }

}
if(isset($_POST['sua_khoa_hoc_cua_giao_vien'])){
    //sua
    $id_khgv=$_GET['id_khgv'];
    $ten_giao_vien = $_POST['ten_giao_vien'];
    $ten_khoa_hoc= $_POST['ten_khoa_hoc'];

    $sql = "select * from quan_ly_khoa_hoc_cua_giao_vien";
    $run = mysqli_query($conn, $sql);
    $temp=0;
    while($dong=mysqli_fetch_array($run)) {
        if($dong['ten_khoa_hoc']==$ten_khoa_hoc){
            $temp=1;
        }
    }

    if($temp==0){
        $sql="update quan_ly_khoa_hoc_cua_giao_vien set ten_giao_vien='$ten_giao_vien',ten_khoa_hoc='$ten_khoa_hoc' where id_quan_ly_kh_cua_gv='$id_khgv'";
        mysqli_query($conn,$sql);
        header('location:../../index_v1.php#ajax/bang_khoa_hoc_cua_giao_vien.php');
    }
    if($temp==1){
        header('location:../../index_v1.php#ajax/quan_ly_khoa_hoc_cua_giao_vien.php');
        $_SESSION['ton_tai_kh_cua_gv']='ton_tai_kh_cua_gv';
    }

}
if(isset($_GET['xoa'])){
    //xoa
    $id_khgv=$_GET['id_khgv'];

    $sql="delete from quan_ly_khoa_hoc_cua_giao_vien where id_quan_ly_kh_cua_gv='$id_khgv'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_khoa_hoc_cua_giao_vien.php');
}
?>