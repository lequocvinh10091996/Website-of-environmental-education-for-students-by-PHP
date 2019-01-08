<?php
    $title='Môi Trường';
?>
<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='moi_truong';
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
mysqli_select_db($conn,$csdl);
?>
