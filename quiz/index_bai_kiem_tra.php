<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php
    include ('../modules/xu_ly/config/config.php');
    session_start();
    $id_baihoc=$_GET['id_baihoc'];
    $sql="select * from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_array($run)
    ?>
	<title>Kiểm Tra Của <?php echo $dong['ten_bai_hoc'];?></title>
    <?php $ten_bai_hoc=$dong['ten_bai_hoc'];?>
	<link rel="stylesheet" type="text/css" href="css/style.css" />



</head>

<body>

<div id="page-wrap">
		<h1>Kiểm Tra Của <?php echo $dong['ten_bai_hoc'];?></h1>
    <p style="font-size: 17px; color: #bbb000;">Bạn phải hoàn thành trước <input type="text" style="width: 30px; border: 0; color: #721c24; font-size: 25px;" id="textBox"/> giây</p>

    <script>
        var number=21;

        function demNguoc() {
            number=number-1;
            if(number!=0){
                document.getElementById("textBox").value=number;
                setTimeout("demNguoc()",1000);
            }else{
                window.location.href="grade_bai_kiem_tra.php?ten_bh=<?php echo $dong['ten_bai_hoc'];?>&id_baihoc=<?php echo $dong['id_quan_ly_bh'];?>&het_tg=1";
            }
        }

        demNguoc();
    </script>
        <?php
        $id_baihoc=$_GET['id_baihoc'];
        $sql="select * from quan_ly_kiem_tra_bai_hoc where id_quan_ly_bh='$id_baihoc'";
        $run=mysqli_query($conn,$sql);
        ?>
		<form action="grade_bai_kiem_tra.php?ten_bh=<?php echo $ten_bai_hoc;?>&id_baihoc=<?php echo $_GET['id_baihoc'];?>" method="post" id="quiz">

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
                    <?php $_SESSION['id_cauhoi'][$i]=$dong['id_quan_ly_ktbh'];?>
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
            
            <input type="submit" value="Hoàn Thành" name="hoan_thanh_kiem_tra"/>
		
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