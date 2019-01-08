<?php
include('config/config.php');


if(isset($_POST['quan_ly_tai_khoan'])){
    //them
    $ho_ten_nguoi_dung=$_POST['ho_ten_nguoi_dung'];
    $tai_khoan_nguoi_dung=$_POST['tai_khoan_nguoi_dung'];
    $mat_khau_nguoi_dung=$_POST['mat_khau_nguoi_dung'];
    $loai_tai_khoan=$_POST['loai_tai_khoan'];
    $sql="insert into quan_ly_tai_khoan (ho_ten_nguoi_dung,tai_khoan_nguoi_dung,mat_khau_nguoi_dung,loai_tai_khoan) values ('$ho_ten_nguoi_dung','$tai_khoan_nguoi_dung','$mat_khau_nguoi_dung','$loai_tai_khoan')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_tai_khoan.php');
}elseif(isset($_POST['sua_quan_ly_tai_khoan'])){
    //sua
    $id_taikhoan=$_GET['id_taikhoan'];
    $ho_ten_nguoi_dung=$_POST['ho_ten_nguoi_dung'];
    $tai_khoan_nguoi_dung=$_POST['tai_khoan_nguoi_dung'];
    $mat_khau_nguoi_dung=$_POST['mat_khau_nguoi_dung'];
    $loai_tai_khoan=$_POST['loai_tai_khoan'];

    $sql="update quan_ly_tai_khoan set ho_ten_nguoi_dung='$ho_ten_nguoi_dung',tai_khoan_nguoi_dung='$tai_khoan_nguoi_dung',mat_khau_nguoi_dung='$mat_khau_nguoi_dung',loai_tai_khoan='$loai_tai_khoan' where id_quan_ly_tk='$id_taikhoan'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_tai_khoan.php');
}elseif(isset($_GET['xoa'])){
    //xoa
    $id_ndkkh=$_GET['id_ndkkh'];

    $xoa_khoahoc=$_GET['xoa_khoahoc'];
    $xoa_htdk=$_GET['xoa_htdk'];

    $sql="delete from quan_ly_nguoi_dang_ky_khoa_hoc where id_quan_ly_ndkkh='$id_ndkkh'";
    mysqli_query($conn,$sql);

    $sql="delete from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$xoa_khoahoc' and ho_ten_dang_ky='$xoa_htdk'";
    mysqli_query($conn,$sql);


    header('location:../../index_v1_gv.php#ajax/bang_nhung_nguoi_dang_ky_khoa_hoc_gv.php');
}
?>