<?php
include ('modules/xu_ly/config/config.php');
$id_baihoc=$_GET['id_baihoc'];
$sql="select * from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run)
?>
<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="lop_<?php echo $dong['lop_khoa_hoc']; ?>.php">Lớp <?php echo $dong['lop_khoa_hoc'] ?></a></li>
                            <li><a href="chi_tiet_khoa_hoc.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh']; ?>"><?php echo $dong['ten_khoa_hoc'] ?></a></li>
                            <li><a href="bai_hoc.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh']; ?>"><?php echo $dong['ten_bai_hoc'] ?></a></li>
                            <li>Nội Dung Bài Học</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>