<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Kết Quả Của kiểm Tra <?php echo $_GET['ten_kh'];?></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Kết Quả Của Kiểm Tra <?php echo $_GET['ten_kh'];?></h1>
		
        <?php
        if(isset($_GET['het_tg'])){
            echo '<script>alert("Bạn đã hết thời gian kiểm tra !")</script>';
            echo "<div id='results'>=> Chưa hoàn thành</div><br>";
            $id_khoahoc_kiemtra=$_GET['id_khoahoc_kiemtra'];
            echo "<a href='index_khoa_kiem_tra.php?id_khoahoc_kiemtra=$id_khoahoc_kiemtra' style='font-size: 20px; text-decoration: none;'>Làm Lại</a>";
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
                $sql = "select * from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_ktkh='$id_cauhoi'";
                $run = mysqli_query($conn, $sql);
                $dong=mysqli_fetch_array($run);
                if($dong['tra_loi_dung_ch1']==$_SESSION['cau_tra_loi'][$i]){
                    $diem++;
                }
                $i++;
            }
            echo "<div id='results'>=>Bạn Đã Hoàn Thành Khóa Học Với Tổng Câu Trả Lời Đúng : $diem/$tong_cau_hoi</div><br>";
            $diem_cuoi_khoa=($diem*10)/$diem;
            echo "<div id='results'>=>Số Điểm Đạt Được : $diem_cuoi_khoa</div><br>";
//        if($diem==$tong_cau_hoi){

//            echo "<div id='results'>=> Hoàn Thành</div><br>";
            $id_khoahoc_kiemtra=$_GET['id_khoahoc_kiemtra'];
            $ho_ten_hoan_thanh_ktk=$_SESSION['ho_ten_dang_ky'];
            // insert vào chứng nhận
            $thoi_gian_cn=date('Y-m-d H:i:s');
            $diem_kiem_tra_cuoi_khoa=$diem.'/'.$tong_cau_hoi;
            $sql="insert into quan_ly_chung_nhan (id_quan_ly_kh,ho_ten_dang_ky,diem_cn,thoi_gian_cn) values ('$id_khoahoc_kiemtra','$ho_ten_hoan_thanh_ktk','$diem_kiem_tra_cuoi_khoa','$thoi_gian_cn')";
            mysqli_query($conn,$sql);

            $trang_thai='hoàn thành';
            $diem_kiem_tra_cuoi_khoa=$diem.'/'.$tong_cau_hoi;
//            trạng thái kiểm tra
            $sql="update quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa set diem_kiem_tra_cuoi_khoa='$diem_kiem_tra_cuoi_khoa',trang_thai='$trang_thai' where id_quan_ly_kh='$id_khoahoc_kiemtra' and ho_ten_dang_ky='$ho_ten_hoan_thanh_ktk'";
            mysqli_query($conn,$sql);
            //trạng thái khóa học
            $trang_thai_kh='hoàn thành';
            $sql="update quan_ly_nguoi_dang_ky_khoa_hoc set trang_thai='$trang_thai_kh' where id_quan_ly_kh='$id_khoahoc_kiemtra' and ho_ten_dang_ky='$ho_ten_hoan_thanh_ktk'";
            mysqli_query($conn,$sql);

            $sql = "select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc_kiemtra'";
            $run = mysqli_query($conn, $sql);
            $dong=mysqli_fetch_array($run);
            $lop=$dong['lop_khoa_hoc'];
            $_SESSION['ten_khoa_hoc_chung_nhan']=$dong['ten_khoa_hoc'];
            echo '<p style="font-size: 20px;">Chọn vào "Tải" để tải chứng nhận về hoặc "Xem" để xem chứng nhận trước:<p></p><form method="post" action="../pdf.php"><input type="submit" name="generate_pdf" class="btn btn-success" value="Tải" /></form><form method="post" action="../xem_pdf.php"><input type="submit" name="generate_xem_pdf" class="btn btn-success" value="Xem" /></form><br><br>';
            echo "<a href='../lop_$lop.php?lop=$lop&xoa_dlc=$id_khoahoc_kiemtra' style='font-size: 20px; text-decoration: none;'>Tiếp Tục Học Khóa Kế</a>";
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