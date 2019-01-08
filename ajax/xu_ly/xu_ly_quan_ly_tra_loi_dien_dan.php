<?php
include('config/config.php');
session_start();

if(isset($_POST['ch'])){
    //them
    $cau_hoi_dien_dan= $_POST['ch'];
    $_SESSION['cau_hoi_dien_dan']=$_POST['ch'];
    $nguoi_tra_loi_dien_dan=$_SESSION['ho_ten_dang_ky'];
    $tra_loi_dien_dan='';

    $sql="select * from quan_ly_tra_loi_dien_dan where cau_hoi_dien_dan='$cau_hoi_dien_dan' and nguoi_tra_loi_dien_dan='$nguoi_tra_loi_dien_dan'";
    $run=mysqli_query($conn,$sql);
    $temp=0;
    while($dong=mysqli_fetch_array($run)){
        $temp=1;
    }

    if($temp==0 and $cau_hoi_dien_dan!=''){
        $sql="insert into quan_ly_tra_loi_dien_dan (cau_hoi_dien_dan,nguoi_tra_loi_dien_dan,tra_loi_dien_dan) values ('$cau_hoi_dien_dan','$nguoi_tra_loi_dien_dan','$tra_loi_dien_dan')";
        mysqli_query($conn,$sql);
    }

}
if(isset($_POST['tra_loi_dien_dan'])){
    //tra loi
    $cau_tra_loi_dien_dan=$_POST['cau_tra_loi_dien_dan'];
    $nguoi_tra_loi_dien_dan=$_SESSION['ho_ten_dang_ky'];
    $cau_hoi_dien_dan=$_SESSION['cau_hoi_dien_dan'];
    $sql="update quan_ly_tra_loi_dien_dan set tra_loi_dien_dan='$cau_tra_loi_dien_dan' where nguoi_tra_loi_dien_dan='$nguoi_tra_loi_dien_dan' and cau_hoi_dien_dan='$cau_hoi_dien_dan'";
    mysqli_query($conn,$sql);
    header('location:../../dien_dan.php');
}

if(isset($_GET['xoa'])){
    //xoa
    $id_tldd=$_GET['id_tldd'];

    $sql="delete from quan_ly_tra_loi_dien_dan where id_quan_ly_tldd='$id_tldd'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_cau_tra_loi_dien_dan.php');
}
?>



