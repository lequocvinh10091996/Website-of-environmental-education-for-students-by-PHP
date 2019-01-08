<div class="team">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Những Chứng Nhận Hoàn Thành Khóa Học</h2>
                    <div class="section_subtitle"><p>Những Chứng Nhận Hoàn Thành Khóa Học</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">
            <?php
            include ('modules/xu_ly/config/config.php');
            ?>

            <table border="1" style="margin-left: 400px;">
                <tr>
                    <td width="150" align="center"><strong>Họ Tên</strong></td>
                    <td width="150" align="center"><strong>Bài kiểm tra khóa học</strong></td>
                    <td width="20" align="center"><strong>Số Câu Trả Lời Đúng</strong></td>
                    <td width="20" align="center"><strong>Điểm</strong></td>
                    <td width="100" align="center"><strong>Thời Gian Hoàn Thành<strong</td>
                </tr>

                <?php
                $sql="select * from quan_ly_chung_nhan";
                $run=mysqli_query($conn,$sql);
                ?>
                <?php
                while($dong=mysqli_fetch_array($run)){
                    $id_khoahoc_cn=$dong['id_quan_ly_kh'];
                    $sql1="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc_cn'";
                    $run1=mysqli_query($conn,$sql1);
                    $dong1=mysqli_fetch_array($run1);
                    if((($dong['diem_cn']*10)/4)>5){
                    ?>
                    <tr>
                        <td align="center"><?php echo $dong['ho_ten_dang_ky'];?></td>
                        <td align="center"><?php echo $dong1['ten_khoa_hoc'];?></td>
                        <td align="center"><?php echo $dong['diem_cn'];?></td>
                        <td align="center"><?php echo ($dong['diem_cn']*10)/$dong['diem_cn'];?></td>
                        <td align="center"><?php echo $dong['thoi_gian_cn'];?></td>
                    </tr>
                <?php }}?>

            </table>

        </div>
    </div>
</div>