<?php
require_once 'config.php';

if($_POST['act'] == 'rate'){
//    $ip = $_SERVER["REMOTE_ADDR"];
    $therate = $_POST['rate'];
    $thepost = $_POST['nguoi_danh_gia'];
    $id_khoahoc=$_POST['id_khoahoc'];

    $query = mysqli_query($conn,"SELECT * FROM star where nguoi_danh_gia= '$thepost' and id_quan_ly_kh='$id_khoahoc' ");
    while($data = mysqli_fetch_assoc($query)){
        $rate_db[] = $data;
    }

    if(@count($rate_db) == 0 ){
        mysqli_query($conn,"INSERT INTO star (id_quan_ly_kh,nguoi_danh_gia, rate)VALUES('$id_khoahoc','$thepost', '$therate')");
    }else{
        mysqli_query($conn,"UPDATE star SET rate= '$therate' WHERE nguoi_danh_gia= '$thepost' and id_quan_ly_kh='$id_khoahoc' ");
    }
}
?>