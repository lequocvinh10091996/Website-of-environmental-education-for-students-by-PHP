<?php
include('config/config.php');
session_start();

if(isset($_GET['thanh_toan'])){
    //them
    //lấy giá khóa học
    $id_khoahoc = $_GET['id_khoahoc'];

    $sql="select * from quan_ly_khoa_hoc where  id_quan_ly_kh='$id_khoahoc'";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
    $gia_khoa_hoc=$dong['gia_khoa_hoc'];

    // xét sự tồn tại trong dăng kí khóa học
    $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
    $sql="select * from quan_ly_nguoi_dang_ky_khoa_hoc where id_quan_ly_kh='$id_khoahoc' and ho_ten_dang_ky='$ho_ten_dang_ky'";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
    $temp=0;
    $tru_tien=0;
    if($dong['id_quan_ly_ndkkh']!='') {
        header('location:../../bai_hoc.php?id_khoahoc='.$id_khoahoc.'&bat_dau_hoc=1');
        $temp=1;
        $tru_tien=1;
    }
    //lấy số tiền hiện có của người dùng
    $sql="select * from quan_ly_dang_ky where  ho_ten_dang_ky='$ho_ten_dang_ky'";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run);
    $so_tien_dang_ky=$dong['so_tien_dang_ky'];

    if($so_tien_dang_ky>$gia_khoa_hoc && $tru_tien==0){
        $so_tien_dang_ky=$so_tien_dang_ky-$gia_khoa_hoc;
        $sql="update quan_ly_dang_ky set so_tien_dang_ky='$so_tien_dang_ky' where ho_ten_dang_ky='$ho_ten_dang_ky'";
        mysqli_query($conn,$sql);
        header('location:../../bai_hoc.php?id_khoahoc='.$id_khoahoc.'&bat_dau_hoc=1');
        $temp=1;
    }
    if($temp==0){
        header('location:../../chi_tiet_hoc_vien.php');
        $_SESSION['nap_tien'] = 'chưa nạp tiền';
    }
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