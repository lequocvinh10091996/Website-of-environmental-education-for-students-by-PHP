<?php
include('config/config.php');


if(isset($_POST['quan_Ly_khoa_hoc'])){
    $hinhanh=$_FILES['hinh_anh_khoa_hoc']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_khoa_hoc']['tmp_name'];
    $ten_khoa_hoc=$_POST['ten_khoa_hoc'];
    $gia_khoa_hoc=$_POST['gia_khoa_hoc'];
    $loai_khoa_hoc=$_POST['loai_khoa_hoc'];
    $thoi_luong_khoa_hoc=$_POST['thoi_luong_khoa_hoc'];
    $bai_giang_khoa_hoc=$_POST['bai_giang_khoa_hoc'];
    $lop_khoa_hoc=$_POST['lop_khoa_hoc'];
    $mo_ta_ngan_khoa_hoc=$_POST['mo_ta_ngan_khoa_hoc'];
    $mo_ta_chi_tiet_khoa_hoc=$_POST['mo_ta_chi_tiet_khoa_hoc'];
//    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    move_uploaded_file($hinhanh_tmp,'uploads/lop_'.$lop_khoa_hoc.'/'.$hinhanh);

    //them
    $sql="insert into quan_ly_khoa_hoc (hinh_anh_khoa_hoc,ten_khoa_hoc,gia_khoa_hoc,loai_khoa_hoc,thoi_luong_khoa_hoc,bai_giang_khoa_hoc,lop_khoa_hoc,mo_ta_ngan_khoa_hoc,mo_ta_chi_tiet_khoa_hoc) values ('$hinhanh','$ten_khoa_hoc','$gia_khoa_hoc','$loai_khoa_hoc','$thoi_luong_khoa_hoc','$bai_giang_khoa_hoc','$lop_khoa_hoc','$mo_ta_ngan_khoa_hoc','$mo_ta_chi_tiet_khoa_hoc')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_khoa_hoc.php');
}
if(isset($_POST['sua_quan_Ly_khoa_hoc'])){
    $id_khoahoc=$_GET['id_khoahoc'];
    $hinhanh=$_FILES['hinh_anh_khoa_hoc']['name'];
    $hinhanh_tmp=$_FILES['hinh_anh_khoa_hoc']['tmp_name'];
    $ten_khoa_hoc=$_POST['ten_khoa_hoc'];
    $gia_khoa_hoc=$_POST['gia_khoa_hoc'];
    $loai_khoa_hoc=$_POST['loai_khoa_hoc'];
    $thoi_luong_khoa_hoc=$_POST['thoi_luong_khoa_hoc'];
    $bai_giang_khoa_hoc=$_POST['bai_giang_khoa_hoc'];
    $lop_khoa_hoc=$_POST['lop_khoa_hoc'];
    $mo_ta_ngan_khoa_hoc=$_POST['mo_ta_ngan_khoa_hoc'];
    $mo_ta_chi_tiet_khoa_hoc=$_POST['mo_ta_chi_tiet_khoa_hoc'];
    move_uploaded_file($hinhanh_tmp,'uploads/lop_'.$lop_khoa_hoc.'/'.$hinhanh);
    //sua
    if($hinhanh!=''){
        $sql="update quan_ly_khoa_hoc set hinh_anh_khoa_hoc='$hinhanh',ten_khoa_hoc='$ten_khoa_hoc',gia_khoa_hoc='$gia_khoa_hoc',loai_khoa_hoc='$loai_khoa_hoc',thoi_luong_khoa_hoc='$thoi_luong_khoa_hoc',bai_giang_khoa_hoc='$bai_giang_khoa_hoc',lop_khoa_hoc='$lop_khoa_hoc',mo_ta_ngan_khoa_hoc='$mo_ta_ngan_khoa_hoc',mo_ta_chi_tiet_khoa_hoc='$mo_ta_chi_tiet_khoa_hoc' where id_quan_ly_kh='$id_khoahoc'";
    }else{
        $sql="update quan_ly_khoa_hoc set ten_khoa_hoc='$ten_khoa_hoc',gia_khoa_hoc='$gia_khoa_hoc',loai_khoa_hoc='$loai_khoa_hoc',thoi_luong_khoa_hoc='$thoi_luong_khoa_hoc',bai_giang_khoa_hoc='$bai_giang_khoa_hoc',lop_khoa_hoc='$lop_khoa_hoc',mo_ta_ngan_khoa_hoc='$mo_ta_ngan_khoa_hoc',mo_ta_chi_tiet_khoa_hoc='$mo_ta_chi_tiet_khoa_hoc' where id_quan_ly_kh='$id_khoahoc'";
    }
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_khoa_hoc.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_khoahoc=$_GET['id_khoahoc'];

    $sql="delete from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_khoa_hoc.php');
}
?>