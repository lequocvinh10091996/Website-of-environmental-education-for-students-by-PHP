<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php
    include ('../modules/xu_ly/config/config.php');
    session_start();
    $id_khoahoc_kiemtra=$_GET['id_khoahoc_kiemtra'];
    $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc_kiemtra'";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run)
    ?>
	<title>Kiểm Tra Của <?php echo $dong['ten_khoa_hoc'];?></title>
    <?php $ten_khoa_hoc=$dong['ten_khoa_hoc'];?>
    <?php
//    $hello='le quoc vinh';
//    echo $_SESSION[$hello]=$dong['ten_khoa_hoc'];
    ?>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div id="page-wrap">
		<h1>Kiểm Tra Của <?php echo $dong['ten_khoa_hoc'];?></h1>
        <?php
        $id_khoahoc_kiemtra=$_GET['id_khoahoc_kiemtra'];
        $sql="select * from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_kh='$id_khoahoc_kiemtra'";
        $run=mysqli_query($conn,$sql);
        ?>
		<form action="grade_khoa_kiem_tra.php?ten_kh=<?php echo $ten_khoa_hoc;?>&id_khoahoc_kiemtra=<?php echo $_GET['id_khoahoc_kiemtra'];?>" method="post" id="quiz">
		
            <ol>
                <?php
                $i=1;
                while($dong=mysqli_fetch_array($run)){
                ?>
                <table align="center">
                <li>
                    <?php if($dong['hinh_ch']!=''){?>
                        <img src="images/<?php echo $dong['hinh_ch'];?>" width="100" height="100">
                    <?php }?>
                    <h3><?php echo $dong['cau_hoi_1'];?></h3>
                    <?php $_SESSION['id_cauhoi'][$i]=$dong['id_quan_ly_ktkh'];?>
                        <div>
                        <tr>
                            <td width="20"><input type="radio" name="tra_loi_<?php echo $i;?>" id="question-1-answers-A" value='<?php echo $dong['tra_loi_1_ch1'];?>' /></td>
                            <td width="30">A)</td>
                            <td><?php echo $dong['tra_loi_1_ch1'];?></td>
                        </tr>
                        </div>
                        <div>
                        <tr>

                            <td width="20"><input type="radio" name="tra_loi_<?php echo $i;?>" id="question-1-answers-B" value='<?php echo $dong['tra_loi_2_ch1'];?>' /></td>
                            <td width="30">B)</td>
                            <td><?php echo $dong['tra_loi_2_ch1'];?></td>
                        </tr>
                        </div>
                        <div>
                        <tr>
                            <td width="20"><input type="radio" name="tra_loi_<?php echo $i;?>" id="question-1-answers-C" value='<?php echo $dong['tra_loi_3_ch1'];?>' /></td>
                            <td width="30">C)</td>
                            <td><?php echo $dong['tra_loi_3_ch1'];?></td>
                        </tr>
                        </div>
                        <div>
                        <tr>
                            <td width="20"><input type="radio" name="tra_loi_<?php echo $i;?>" id="question-1-answers-D" value='<?php echo $dong['tra_loi_4_ch1'];?>' /></td>
                            <td width="30">D)</td>
                            <td><?php echo $dong['tra_loi_4_ch1'];?></td>
                        </tr>
                        </div>
                    <div>
                        <tr>
                            <td height="20"></td>
                            <td ></td>
                            <td></td>
                        </tr>
                    </div>
                </li>
                </table>
                    <?php
                    $i++;
                }
                $i--;
                $_SESSION['tong_cau_hoi']=$i;
                ?>

            </ol>
            
            <a href="../index_v1_gv.php#ajax/bang_nhung_trang_thai_bai_kiem_tra_cuoi_khoa_gv.php">Trở Về</a>
		
		</form>
	
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