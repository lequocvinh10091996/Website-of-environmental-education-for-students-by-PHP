<?php
include('config/config.php');
session_start();

if(isset($_POST['dang_nhap_quan_ly'])){
    //them
    $tai_khoan_quan_ly = $_POST['tai_khoan_quan_ly'];
    $mat_khau_quan_ly= md5($_POST['mat_khau_quan_ly']);
    $sql="select * from quan_ly_tai_khoan";
    $run=mysqli_query($conn,$sql);
    $temp=0;
    while($dong=mysqli_fetch_array($run)) {
        if($dong['tai_khoan_nguoi_dung']==$tai_khoan_quan_ly && $dong['mat_khau_nguoi_dung']==$mat_khau_quan_ly && $dong['loai_tai_khoan']=='ql') {
            $_SESSION['dang_nhap_quan_ly'] = 'thanh cong';
            $_SESSION['ho_ten_quan_ly'] = $dong['ho_ten_nguoi_dung'];
            header('location:../../index_v1.php');
            $temp=1;
        }
        if($dong['tai_khoan_nguoi_dung']==$tai_khoan_quan_ly && $dong['mat_khau_nguoi_dung']==$mat_khau_quan_ly && $dong['loai_tai_khoan']=='gv') {
            $_SESSION['dang_nhap_quan_ly'] = 'thanh cong';
            $_SESSION['ho_ten_quan_ly'] = $dong['ho_ten_nguoi_dung'];
            header('location:../../index_v1_gv.php');
            $temp=1;
        }
    }
    if($temp==0){
        $_SESSION['sai_tai_khoan']='sai';
        header('location:../../ajax/dang_nhap.php');
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
    unset($_SESSION['dang_nhap_quan_ly']);
    unset($_SESSION['ho_ten_quan_ly']);
//    session_destroy();
    header('location:../../index.php');
}
?>



