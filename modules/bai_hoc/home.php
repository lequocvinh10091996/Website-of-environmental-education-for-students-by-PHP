<?php
$id_khoahoc=$_GET['id_khoahoc'];
include ('modules/xu_ly/config/config.php');
$sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);
?>
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Khóa Học</li>
                            <li><a href="lop_<?php echo $dong['lop_khoa_hoc']; ?>.php">Lớp <?php echo $dong['lop_khoa_hoc']; ?></a></li>
                            <li><a href="chi_tiet_khoa_hoc.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh']; ?>"><?php echo $dong['ten_khoa_hoc']; ?></a></li>
                            <li>Bài Học</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>