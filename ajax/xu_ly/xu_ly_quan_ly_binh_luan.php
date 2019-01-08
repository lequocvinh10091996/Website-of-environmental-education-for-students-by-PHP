<?php
include('config/config.php');
session_start();

if(isset($_POST['binh_luan'])){
    //them
    $binh_luan=$_POST['binh_luan_khoa_hoc'];
    $ten_nguoi_bl=$_GET['ten_nguoi_bl'];
    $id_khoahoc=$_GET['id_khoahoc'];

    $query = mysqli_query($conn,"SELECT * FROM quan_ly_binh_luan where nguoi_binh_luan= '$ten_nguoi_bl' and id_quan_ly_kh='$id_khoahoc' ");
    while($data = mysqli_fetch_assoc($query)){
        $rate_db[] = $data;
    }

    if(@count($rate_db) == 0 ){
        mysqli_query($conn,"INSERT INTO quan_ly_binh_luan (id_quan_ly_kh,nguoi_binh_luan, binh_luan)VALUES('$id_khoahoc','$ten_nguoi_bl', '$binh_luan')");
    }else{
        mysqli_query($conn,"UPDATE quan_ly_binh_luan SET binh_luan= '$binh_luan' WHERE nguoi_binh_luan= '$ten_nguoi_bl' and id_quan_ly_kh='$id_khoahoc'");
    }
    header('location:../../chi_tiet_khoa_hoc.php?id_khoahoc='.$id_khoahoc);
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