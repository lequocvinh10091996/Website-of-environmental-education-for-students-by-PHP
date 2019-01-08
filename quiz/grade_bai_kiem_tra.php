<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Kết Quả Của kiểm Tra <?php echo $_GET['ten_bh'];?></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Kết Quả Của Kiểm Tra<?php echo $_GET['ten_bh'];?></h1>
		
        <?php
        if(isset($_GET['het_tg'])){

                echo '<script>alert("Bạn đã hết thời gian kiểm tra !")</script>';
                echo "<div id='results'>=> Chưa hoàn thành</div><br>";
                $id_baihoc=$_GET['id_baihoc'];
                echo "<a href='index_bai_kiem_tra.php?id_baihoc=$id_baihoc' style='font-size: 20px; text-decoration: none;'>Làm Lại</a>";
        }else{
            session_start();
            include ('../modules/xu_ly/config/config.php');
            $tong_cau_hoi=$_SESSION['tong_cau_hoi'];
            $i=1;
            while($i<=$tong_cau_hoi){
                $_SESSION['cau_tra_loi'][$i]=$_POST["tra_loi_$i"];
                $i++;
            }


            $i=1;
            $diem=0;
            while($i<=$tong_cau_hoi) {
                $id_cauhoi = $_SESSION['id_cauhoi'][$i];
                $sql = "select * from quan_ly_kiem_tra_bai_hoc where id_quan_ly_ktbh='$id_cauhoi'";
                $run = mysqli_query($conn, $sql);
                $dong=mysqli_fetch_array($run);
                if($dong['tra_loi_dung_ch1']==$_SESSION['cau_tra_loi'][$i]){
                    $diem++;
                }

                $i++;
            }
            echo "<div id='results'>Tổng Điểm: $diem / $tong_cau_hoi </div>";
            if($diem==$tong_cau_hoi){
                $i=1;
                echo "<div id='results'>=> Hoàn Thành</div><br>";
//            $_SESSION['hoan_thanh']=$i;
                $id_baihoc=$_GET['id_baihoc'];
                $sql = "select * from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
                $run = mysqli_query($conn, $sql);
                $dong=mysqli_fetch_array($run);
                $id_khoahoc=$dong['id_quan_ly_kh'];
                $id_baihoc=$dong['id_quan_ly_bh'];
                echo "<a href='../bai_hoc.php?id_khoahoc=$id_khoahoc&hoan_thanh=$id_baihoc' style='font-size: 20px; text-decoration: none;'>Tiếp Tục Học Bài Kế</a>";
                $trang_thai='hoàn thành';
                $ho_ten_dand_ky=$_SESSION['ho_ten_dang_ky'];
                $sql="update quan_ly_trang_thai_nguoi_hoc_khoa_hoc set trang_thai='$trang_thai' where id_quan_ly_bh='$id_baihoc' and ho_ten_dang_ky='$ho_ten_dand_ky'";
                mysqli_query($conn,$sql);

            }else{
                echo "<div id='results'>=> Chưa hoàn thành</div><br>";
                $id_baihoc=$_GET['id_baihoc'];
                echo "<a href='index_bai_kiem_tra.php?id_baihoc=$id_baihoc' style='font-size: 20px; text-decoration: none;'>Làm Lại</a>";
            }
        }

        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>