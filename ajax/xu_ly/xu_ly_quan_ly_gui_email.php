<?php
include('config/config.php');
session_start();

if(isset($_POST['gui_email'])){
    //them
    $ten_gui_mail = $_POST['ten_gui_email'];
    $email_gui_email= $_POST['email_gui_email'];
    $tin_nhan_gui_email= $_POST['tin_nhan_gui_email'];
    $sql="insert into quan_ly_gui_email (ten_gui_email,email_gui_email,tin_nhan_gui_email) values ('$ten_gui_mail','$email_gui_email','$tin_nhan_gui_email')";
    mysqli_query($conn,$sql);

    $_SESSION['gui_email']='thành công';
    header('location:../../dia_chi.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_gemail=$_GET['id_gemail'];

    $sql="delete from quan_ly_gui_email where id_quan_ly_gemail='$id_gemail'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_tin_nhan_email.php');
}

if(isset($_GET['destroy'])){
    //huy session
    unset($_SESSION['dang_nhap']);
    unset($_SESSION['ho_ten_dang_ky']);
    unset($_SESSION['id_dang_ky']);
//    session_destroy();
    header('location:../../index.php');
}
?>

?>


