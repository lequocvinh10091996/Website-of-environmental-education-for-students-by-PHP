<?php
include('config/config.php');
session_start();

if(isset($_POST['quan_ly_tai_khoan'])){
    //them
    $ho_ten_nguoi_dung=$_POST['ho_ten_nguoi_dung'];
    $tai_khoan_nguoi_dung=$_POST['tai_khoan_nguoi_dung'];
    $mat_khau_nguoi_dung=md5($_POST['mat_khau_nguoi_dung']);
    $loai_tai_khoan=$_POST['loai_tai_khoan'];

    $sql = "select * from quan_ly_tai_khoan";
    $run = mysqli_query($conn, $sql);
    $temp=0;
    while($dong = mysqli_fetch_array($run)) {
        if ($ho_ten_nguoi_dung == $dong['ho_ten_nguoi_dung'] || $tai_khoan_nguoi_dung == $dong['tai_khoan_nguoi_dung']) {
            $temp=1;
        }
    }
    if($temp==0){
        $sql="insert into quan_ly_tai_khoan (ho_ten_nguoi_dung,tai_khoan_nguoi_dung,mat_khau_nguoi_dung,loai_tai_khoan) values ('$ho_ten_nguoi_dung','$tai_khoan_nguoi_dung','$mat_khau_nguoi_dung','$loai_tai_khoan')";
        mysqli_query($conn,$sql);
        header('location:../../index_v1.php#ajax/bang_nhung_tai_khoan.php');
    }
    if($temp==1){
        $_SESSION['tao_tai_khoan']='that_bai';
        header('location:../../index_v1.php#ajax/quan_ly_tai_khoan.php');
    }

}elseif(isset($_POST['sua_quan_ly_tai_khoan'])){
    //sua
    $id_taikhoan=$_GET['id_taikhoan'];
    $ho_ten_nguoi_dung=$_POST['ho_ten_nguoi_dung'];
    $tai_khoan_nguoi_dung=$_POST['tai_khoan_nguoi_dung'];
    $mat_khau_nguoi_dung=md5($_POST['mat_khau_nguoi_dung']);
    $loai_tai_khoan=$_POST['loai_tai_khoan'];

    $sql="update quan_ly_tai_khoan set ho_ten_nguoi_dung='$ho_ten_nguoi_dung',tai_khoan_nguoi_dung='$tai_khoan_nguoi_dung',mat_khau_nguoi_dung='$mat_khau_nguoi_dung',loai_tai_khoan='$loai_tai_khoan' where id_quan_ly_tk='$id_taikhoan'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_tai_khoan.php');
}elseif(isset($_GET['xoa'])){
    //xoa
    $id_taikhoan=$_GET['id_taikhoan'];
    $sql="delete from quan_ly_tai_khoan where id_quan_ly_tk='$id_taikhoan'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_tai_khoan.php');
}
?>