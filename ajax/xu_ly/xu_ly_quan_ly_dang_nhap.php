<?php
include('config/config.php');
session_start();

if(isset($_POST['dang_nhap'])){
    //them
    $_SESSION['mat_khau_hien_chinh_sua']=$_POST['mat_khau_dang_nhap'];
    $tai_khoan_dang_nhap = $_POST['tai_khoan_dang_nhap'];
    $mat_khau_dang_nhap= md5($_POST['mat_khau_dang_nhap']);
    $sql="select * from quan_ly_dang_ky";
    $run=mysqli_query($conn,$sql);
    $temp=0;
    while($dong=mysqli_fetch_array($run)) {
        if($dong['ten_tai_khoan_dang_ky']==$tai_khoan_dang_nhap && $dong['mat_khau_dang_ky']==$mat_khau_dang_nhap) {
            $temp=1;
            $_SESSION['dang_nhap'] = 'thanh_cong';
            $_SESSION['ho_ten_dang_ky'] = $dong['ho_ten_dang_ky'];
            $_SESSION['id_dang_ky'] = $dong['id_quan_ly_dk'];
            header('location:../../index.php');
        }
    }

    if($temp==0){
        $_SESSION['dang_nhap']='that_bai';
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
    unset($_SESSION['dang_nhap']);
    unset($_SESSION['ho_ten_dang_ky']);
    unset($_SESSION['id_dang_ky']);
    unset($_SESSION['game']);
//    session_destroy();
    header('location:../../index.php');
}
?>



