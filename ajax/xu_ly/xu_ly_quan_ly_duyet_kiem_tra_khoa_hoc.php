<?php
include('config/config.php');
session_start();

if(isset($_POST['them_bai_kiem_tra_khoa'])){
    //them
    $id_khoahoc = $_SESSION['id_khoahoc'];
    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];

    $sql="insert into quan_ly_kiem_tra_khoa_hoc (id_quan_ly_kh,cau_hoi_1,tra_loi_1_ch1,tra_loi_2_ch1,tra_loi_3_ch1,tra_loi_4_ch1,tra_loi_dung_ch1) values 
('$id_khoahoc','$cau_hoi_1','$tra_loi_1_ch1','$tra_loi_2_ch1','$tra_loi_3_ch1','$tra_loi_4_ch1','$tra_loi_dung_ch1')";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_POST['sua_bai_kiem_tra_khoa'])){
    //sua
    $id_kiemtra_khoa=$_GET['id_kiemtra_khoa'];

    $cau_hoi_1=$_POST['cau_hoi_1'];
    $tra_loi_1_ch1=$_POST['tra_loi_1_ch1'];
    $tra_loi_2_ch1=$_POST['tra_loi_2_ch1'];
    $tra_loi_3_ch1=$_POST['tra_loi_3_ch1'];
    $tra_loi_4_ch1=$_POST['tra_loi_4_ch1'];
    $tra_loi_dung_ch1=$_POST['tra_loi_dung_ch1'];

//    $cau_hoi_2=$_POST['cau_hoi_2'];
//    $tra_loi_1_ch2=$_POST['tra_loi_1_ch2'];
//    $tra_loi_2_ch2=$_POST['tra_loi_2_ch2'];
//    $tra_loi_3_ch2=$_POST['tra_loi_3_ch2'];
//    $tra_loi_4_ch2=$_POST['tra_loi_4_ch2'];
//    $tra_loi_dung_ch2=$_POST['tra_loi_dung_ch2'];

    $sql="update quan_ly_kiem_tra_khoa_hoc set cau_hoi_1='$cau_hoi_1',tra_loi_1_ch1='$tra_loi_1_ch1',tra_loi_2_ch1='$tra_loi_2_ch1',tra_loi_3_ch1='$tra_loi_3_ch1',tra_loi_4_ch1='$tra_loi_4_ch1',tra_loi_dung_ch1='$tra_loi_dung_ch1' where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
if(isset($_GET['xoa'])){
    //xoa
    $id_kiemtra_khoa=$_GET['id_kiemtra_khoa'];
    $sql="delete from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_ktkh='$id_kiemtra_khoa'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_kiem_tra_khoa_hoc.php');
}
//$_SESSION['id_quan_ly_kh_duyet']=0;
//$_SESSION['ho_ten_dang_ky_duyet']=0;
if(isset($_GET['duyet_tdk'])){
    //duyet
//    $_SESSION['id_quan_ly_kh_duyet']=$_GET['id_khoahoc'];
//    $_SESSION['ho_ten_dang_ky_duyet']=$_GET['duyet_tdk'];
    $id_quan_ly_kh_duyet=$_GET['id_khoahoc'];
    $ho_ten_dang_ky_duyet=$_GET['duyet_tdk'];
    $trang_thai_duyet_kiem_tra='đã duyệt';
    $sql="update quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa set trang_thai_duyet_kiem_tra='$trang_thai_duyet_kiem_tra'  where id_quan_ly_kh='$id_quan_ly_kh_duyet' and ho_ten_dang_ky='$ho_ten_dang_ky_duyet'";
    mysqli_query($conn,$sql);
    header('location:../../index_v1.php#ajax/bang_nhung_trang_thai_bai_kiem_tra_cuoi_khoa.php');
}

//    $id_quan_ly_kh_duyet=$_SESSION['id_quan_ly_kh_duyet'];
//    $ho_ten_dang_ky_duyet=$_SESSION['ho_ten_dang_ky_duyet'];

if(isset($_GET['kiem_tra'])){
        $id_khoahoc_hientai=$_GET['id_khoahoc_kiemtra'];
        $ho_ten_hientai=$_GET['ho_ten_dkkt'];
//        if($id_quan_ly_kh_duyet!=null){
                $sql="select * from quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa where id_quan_ly_kh='$id_khoahoc_hientai' and ho_ten_dang_ky='$ho_ten_hientai'";
                $run=mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($run);
                if($dong['trang_thai_duyet_kiem_tra']=='đã duyệt'){
                    $id_khoahoc_kiemtra=$dong['id_quan_ly_kh'];
                    header('location:../../quiz/index_khoa_kiem_tra.php?id_khoahoc_kiemtra='.$id_khoahoc_kiemtra);
                }
                else{
                    header('location:../../bai_hoc.php?id_khoahoc='.$id_khoahoc_hientai.'&bat_dau_hoc=1');
                }
//        }else{
//            header('location:../../bai_hoc.php?id_khoahoc='.$id_khoahoc_hientai.'&bat_dau_hoc=1');
//        }
}
?>