<div class="sidebar_section">
    <div class="sidebar_section_title">Khóa Học Mới Nhất</div>
    <div class="sidebar_latest">
        <?php
        include ('modules/xu_ly/config/config.php');
        $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh>(select min(id_quan_ly_kh)+6 from quan_ly_khoa_hoc)";
        $run=mysqli_query($conn,$sql);
        ?>
        <?php
        $khoahoc_moi=1;
        while($dong=mysqli_fetch_array($run) and $khoahoc_moi<=3){
        ?>
        <!-- Latest Course -->
        <div class="latest d-flex flex-row align-items-start justify-content-start">
            <div class="latest_image"><div><img src="ajax/xu_ly/uploads/lop_<?php echo $dong['lop_khoa_hoc'];?>/<?php echo $dong['hinh_anh_khoa_hoc'];?>" alt=""></div></div>
            <div class="latest_content">
                <div class="latest_title"><a href="chi_tiet_khoa_hoc.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh'];?>"><?php echo $dong['ten_khoa_hoc'];?></a></div>
                <div class="latest_price"><?php echo $dong['gia_khoa_hoc']; ?>K</div>
            </div>
        </div>
            <?php
            $khoahoc_moi++;
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