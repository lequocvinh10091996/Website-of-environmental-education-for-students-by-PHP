<div class="sidebar_section">
    <div class="sidebar_section_title">Khóa Học Đang Học</div>
    <div class="sidebar_latest">
        <?php
        include ('modules/xu_ly/config/config.php');
        $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
        $sql="select * from quan_ly_nguoi_dang_ky_khoa_hoc where ho_ten_dang_ky='$ho_ten_dang_ky'";
        $run=mysqli_query($conn,$sql);
        ?>
        <?php
        $temp=0;
        while($dong=mysqli_fetch_array($run)){
        ?>
        <!-- Latest Course -->
            <?php if($dong['trang_thai']=='chưa hoàn thành') {
                $ten_khoa_hoc_dh=$dong['ten_khoa_hoc'];
                $sql1="select * from quan_ly_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc_dh'";
                $run1=mysqli_query($conn,$sql1);
                $dong1=mysqli_fetch_array($run1);
                ?>
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                    <div class="latest_image">
                        <div>
                            <img src="ajax/xu_ly/uploads/lop_<?php echo $dong1['lop_khoa_hoc']; ?>/<?php echo $dong1['hinh_anh_khoa_hoc']; ?>"
                                 alt=""></div>
                    </div>
                    <div class="latest_content">
                        <div class="latest_title"><a
                                    href="chi_tiet_khoa_hoc.php?id_khoahoc=<?php echo $dong1['id_quan_ly_kh']; ?>"><?php echo $dong1['ten_khoa_hoc']; ?></a>
                        </div>
                        <div class="latest_price"><?php echo $dong1['gia_khoa_hoc']; ?>K</div>
                    </div>
                </div>
                <?php
                $temp=1;
            }
        }
        ?>
        <?php
        if($temp==0){
            echo '<p>Không Có !</p>';
        }
        ?>
        <!-- Latest Course -->
<!--        <div class="latest d-flex flex-row align-items-start justify-content-start">-->
<!--            <div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>-->
<!--            <div class="latest_content">-->
<!--                <div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>-->
<!--                <div class="latest_price">$170</div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Latest Course -->
<!--        <div class="latest d-flex flex-row align-items-start justify-content-start">-->
<!--            <div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>-->
<!--            <div class="latest_content">-->
<!--                <div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>-->
<!--                <div class="latest_price">$220</div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>