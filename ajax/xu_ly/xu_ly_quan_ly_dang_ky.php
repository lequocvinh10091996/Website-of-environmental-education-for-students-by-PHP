<?php
include('config/config.php');
session_start();

if(isset($_POST['dang_ky'])){
    //them
    $_SESSION['mat_khau_hien_chinh_sua']=$_POST['mat_khau_dang_ky'];
    $ho_ten_dang_ky = $_POST['ho_ten_dang_ky'];
    $ten_tai_khoan_dang_ky= $_POST['ten_tai_khoan_dang_ky'];
    $mat_khau_dang_ky= md5($_POST['mat_khau_dang_ky']);
    $lap_lai_mat_khau_dang_ky= md5($_POST['lap_lai_mat_khau_dang_ky']);
    $email_dang_ky= $_POST['email_dang_ky'];
    $tinh_dang_ky= $_POST['tinh_dang_ky'];
    $huyen_dang_ky= $_POST['huyen_dang_ky'];
    $truong_dang_ky= $_POST['truong_dang_ky'];
    $lop_dang_ky= $_POST['lop_dang_ky'];
    $so_tien_dang_ky=0;

    $sql = "select * from quan_ly_dang_ky";
    $run = mysqli_query($conn, $sql);
    $temp=0;
    while($dong = mysqli_fetch_array($run)) {
        if ($ten_tai_khoan_dang_ky == $dong['ten_tai_khoan_dang_ky'] || $ho_ten_dang_ky == $dong['ho_ten_dang_ky']) {
            $temp=1;
        }
    }
    if($temp==0){
        $sql="insert into quan_ly_dang_ky (ho_ten_dang_ky,ten_tai_khoan_dang_ky,mat_khau_dang_ky,lap_lai_mat_khau_dang_ky,email_dang_ky,tinh_dang_ky,huyen_dang_ky,truong_dang_ky,lop_dang_ky,so_tien_dang_ky) values ('$ho_ten_dang_ky','$ten_tai_khoan_dang_ky','$mat_khau_dang_ky','$lap_lai_mat_khau_dang_ky','$email_dang_ky','$tinh_dang_ky','$huyen_dang_ky','$truong_dang_ky','$lop_dang_ky','$so_tien_dang_ky')";
        mysqli_query($conn,$sql);
        $_SESSION['dang_ky']='thanh_cong';
        $_SESSION['ho_ten_dang_ky']=$ho_ten_dang_ky;
        header('location:../../index.php');
    }
    if($temp==1){
        $_SESSION['dang_ky']='that_bai';
        header('location:../../index.php');
    }
}
if(isset($_GET['xoa'])){
    //xoa
    $id_dangky=$_GET['id_dangky'];

    $sql="delete from quan_ly_dang_ky where id_quan_ly_dk='$id_dangky'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_dang_ky.php');
}

if(isset($_GET['destroy'])){
    //huy session
    unset($_SESSION['dang_ky']);
    unset($_SESSION['ho_ten_dang_ky']);
    unset($_SESSION['game']);
//    session_destroy();
    header('location:../../index.php');
}

if(isset($_GET['duyet_nt'])){
    //xoa
    $_SESSION['ten_nguoi_nt']=$_GET['ten_dangky'];
    $_SESSION['duyet_nap_tien']='duyet_nap_tien';

    header('location:../../index_v1.php#ajax/bang_dang_ky.php');
}
?>



