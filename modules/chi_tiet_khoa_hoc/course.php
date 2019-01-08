<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<!--        ajax-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
    .rate{
        width:225px; height: 40px;
        border:#e9e9e9 1px solid;
        background-color:  #f6f6f6;
        margin:60px auto;
        margin-bottom:10px;
    }
    .rate .rate-btn{
        width: 40px; height:35px;
        float: left;
        background: url(system/rate-btn.png) no-repeat;
        cursor: pointer;
    }
    .rate .rate-btn:hover, .rate  .rate-btn-hover, .rate  .rate-btn-active{
        background: url(system/rate-btn-hover.png) no-repeat;
    }

    .result-container{
        width: 82px; height: 18px;
        position: relative;
        background-color: #ccc;
        border: #ccc 1px solid;
        margin:auto;
    }
    .rate-stars{
        width: 82px; height: 18px;
        background: url(system/rate-stars.png) no-repeat;
        position: absolute;
    }
    .rate-bg{
        height: 18px;
        background-color: #ffbe10;
        position: absolute;
    }
</style>

<div class="course">
    <div class="container">
        <div class="row">

            <!-- Course -->

            <?php
                $id_khoahoc=$_GET['id_khoahoc'];
                include ('modules/xu_ly/config/config.php');
                $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
                $run=mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($run);
            ?>
            <?php
            $ten_khoa_hoc=$dong['ten_khoa_hoc'];
            $sql1="select * from quan_ly_giao_vien where ten_giao_vien=(select ten_giao_vien from quan_ly_khoa_hoc_cua_giao_vien where ten_khoa_hoc='$ten_khoa_hoc')";
            $run1=mysqli_query($conn,$sql1);
            $dong1=mysqli_fetch_array($run1)
            ?>
            <div class="col-lg-8">

                <div class="course_container">
                    <div class="course_title"><?php echo $dong['ten_khoa_hoc']; ?></div>
                    <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Giáo Viên:</div>
                            <div class="course_info_text"><?php echo $dong1['ten_giao_vien'];?></div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <?php
                            $id_khoahoc=$dong['id_quan_ly_kh'];
                            $query = mysqli_query($conn,"SELECT * FROM star where id_quan_ly_kh='$id_khoahoc'");
                            $temp=0;
                            while($data = mysqli_fetch_assoc($query)){
                                $temp=1;
                                $rate_db[] = $data;
                                $sum_rates[] = $data['rate'];
                            }
                            if($temp==1){
                                $rate_times = count($rate_db);
                                $sum_rates = array_sum($sum_rates);
                                $rate_value = $sum_rates/$rate_times;
                            }
                            if($temp==0){
                                $rate_value = 0;
                            }
                            ?>
<!--                            <i></i><i></i><i></i><i></i><i></i>-->
                            <div class="course_info_title">Đánh Giá:</div>
                            <div class="rating_r rating_r_4">
                                <?php
                                if($rate_value==1){
                                    echo '<i></i>';
                                }
                                if($rate_value==2){
                                    echo '<i></i><i></i>';
                                }
                                if($rate_value==3){
                                    echo '<i></i><i></i><i></i>';
                                }
                                if($rate_value==4){
                                    echo '<i></i><i></i><i></i><i></i>';
                                }
                                if($rate_value==5){
                                    echo '<i></i><i></i><i></i><i></i>';
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Loại Khóa Học:</div>
                            <div class="course_info_text"><?php echo $dong['loai_khoa_hoc']; ?></div>
                        </div>

                    </div>

                    <!-- Course Image -->
                    <div class="course_image"><img src="ajax/xu_ly/uploads/lop_<?php echo $dong['lop_khoa_hoc'];?>/<?php echo $dong['hinh_anh_khoa_hoc']; ?>" alt=""></div>

                    <!-- Course Tabs -->
                    <div class="course_tabs_container">
                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                            <div class="tab active">Mô Tả</div>
                            <div class="tab">Lộ Trình Học</div>
                            <div class="tab">Đánh Giá</div>
                        </div>
                        <div class="tab_panels">

                            <!-- Description -->
                            <div class="tab_panel active">
                                <div class="tab_panel_title"><?php echo $dong['ten_khoa_hoc']; ?></div>
                                <div class="tab_panel_content">
                                    <div class="tab_panel_text">
                                        <p><?php echo $dong['mo_ta_chi_tiet_khoa_hoc']; ?></p>
                                    </div>
<!--                                    <div class="tab_panel_text">-->
<!--                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>-->
<!--                                    </div>-->
<!--                                    <div class="tab_panel_section">-->
<!--                                        <div class="tab_panel_subtitle">Requirements</div>-->
<!--                                        <ul class="tab_panel_bullets">-->
<!--                                            <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>-->
<!--                                            <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>-->
<!--                                            <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>-->
<!--                                            <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="tab_panel_section">-->
<!--                                        <div class="tab_panel_subtitle">What is the target audience?</div>-->
<!--                                        <div class="tab_panel_text">-->
<!--                                            <p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab_panel_faq">-->
                                        <!--                                            <div class="tab_panel_title">FAQ</div>-->
<!---->
                                        <!-- Accordions -->
<!--                                        <div class="accordions">-->
<!---->
<!--                                            <div class="elements_accordions">-->
<!---->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </div>

                            <!-- Curriculum -->
                            <div class="tab_panel tab_panel_2">
                                <div class="tab_panel_content">
                                    <div class="tab_panel_title"><?php echo $dong['ten_khoa_hoc']; ?></div>
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_text">
                                            <p><?php echo $dong['mo_ta_ngan_khoa_hoc']; ?></p>
                                        </div>

                                        <!-- Dropdowns -->
                                        <ul class="dropdowns">
                                            <?php
                                            $sql2="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc'";
                                            $run2=mysqli_query($conn,$sql2);
                                            ?>
                                            <?php
                                            $i=0;
                                            while($dong2=mysqli_fetch_array($run2)){
                                            ?>
                                            <li>
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span></span> <?php echo $dong2['ten_bai_hoc'];?></div>
                                                    <div class="dropdown_item_text">
                                                        <p><?php echo $dong2['mo_ta_ngan_bai_hoc'];?></p>
                                                    </div>
                                                </div>
                                            </li>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews -->
                            <div class="tab_panel tab_panel_3">
                                <div class="tab_panel_title">Đánh Giá Khóa Học</div>

                                <!-- Rating -->
                                <div class="review_rating_container">
                                    <div class="review_rating">
                                        <?php
                                        $query = mysqli_query($conn,"SELECT * FROM star where id_quan_ly_kh='$id_khoahoc'");
                                        $temp=0;
                                        while($data = mysqli_fetch_assoc($query)){
                                            $temp=1;
                                            $rate_db_1[] = $data;
                                            $sum_rates_1[] = $data['rate'];
                                        }
                                        if($temp==1){
                                            $rate_times = count($rate_db_1);
                                            $sum_rates = array_sum($sum_rates_1);
                                            $rate_value = $sum_rates/$rate_times;
                                            $rate_bg=(($rate_value)/5)*100;
                                        }
                                        if($temp==0){
                                            $rate_times = 0;
                                            $rate_value = 0;
                                            $rate_bg = 0;
                                        }

                                        ?>
                                        <div class="review_rating_num"><?php echo $rate_value;?></div>
                                        <div class="review_rating_stars">
<!--                                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>-->
                                            <div class="box-result">
                                                <div class="result-container">
                                                    <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                                                    <div class="rate-stars"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review_rating_text">(<?php echo $rate_times;?> đánh giá)</div>
                                    </div>
                                    <div class="review_rating_bars">
                                        <ul>
                                            <?php
                                            $rate_bg=0;
                                            $query = mysqli_query($conn,"SELECT * FROM star where rate='5' and id_quan_ly_kh='$id_khoahoc'");
                                            while($data = mysqli_fetch_assoc($query)){
                                                $rate_db5[] = $data;
                                            }

                                            if(@count($rate_db5)) {
                                                $rate_times5 = count($rate_db5);
                                                $rate_value5 = $rate_times5 / $rate_times;
                                                $rate_bg = ($rate_value5) * 100;
                                            }
                                            ?>
                                            <li><span>5 Sao</span><div class="review_rating_bar"><div style="width:<?php echo $rate_bg;?>%"></div></div></li>
                                            <?php
                                            $rate_bg=0;
                                            $query = mysqli_query($conn,"SELECT * FROM star where rate='4' and id_quan_ly_kh='$id_khoahoc'");
                                            while($data = mysqli_fetch_assoc($query)){
                                                $rate_db4[] = $data;
                                            }

                                            if(@count($rate_db4)) {
                                                $rate_times4 = count($rate_db4);
                                                $rate_value4 = $rate_times4 / $rate_times;
                                                $rate_bg = ($rate_value4) * 100;
                                            }
                                            ?>
                                            <li><span>4 Sao</span><div class="review_rating_bar"><div style="width:<?php echo $rate_bg;?>%"></div></div></li>
                                            <?php
                                            $rate_bg=0;
                                            $query = mysqli_query($conn,"SELECT * FROM star where rate='3' and id_quan_ly_kh='$id_khoahoc'");
                                            while($data = mysqli_fetch_assoc($query)){
                                                $rate_db3[] = $data;
                                            }

                                            if(@count($rate_db3)) {
                                                $rate_times3 = count($rate_db3);
                                                $rate_value3 = $rate_times3 / $rate_times;
                                                $rate_bg = ($rate_value3) * 100;
                                            }
                                            ?>
                                            <li><span>3 Sao</span><div class="review_rating_bar"><div style="width:<?php echo $rate_bg;?>%"></div></div></li>
                                            <?php
                                            $rate_bg=0;
                                            $query = mysqli_query($conn,"SELECT * FROM star where rate='2' and id_quan_ly_kh='$id_khoahoc'");
                                            while($data = mysqli_fetch_assoc($query)){
                                                $rate_db2[] = $data;
                                            }

                                            if(@count($rate_db2)) {
                                                $rate_times2 = count($rate_db2);
                                                $rate_value2 = $rate_times2 / $rate_times;
                                                $rate_bg = ($rate_value2) * 100;
                                            }
                                            ?>
                                            <li><span>2 Sao</span><div class="review_rating_bar"><div style="width:<?php echo $rate_bg;?>%"></div></div></li>
                                            <?php
                                            $rate_bg=0;
                                            $query = mysqli_query($conn,"SELECT * FROM star where rate='1'and id_quan_ly_kh='$id_khoahoc'");
                                            while($data = mysqli_fetch_assoc($query)){
                                                $rate_db1[] = $data;
                                            }

                                            if(@count($rate_db1)) {
                                                $rate_times1 = count($rate_db1);
                                                $rate_value1 = $rate_times1 / $rate_times;
                                                $rate_bg = ($rate_value1) * 100;
                                            }
                                            ?>
                                            <li><span>1 Sao</span><div class="review_rating_bar"><div style="width:<?php echo $rate_bg;?>%"></div></div></li>
                                        </ul>
                                    </div>

                                </div>

<!--                                đánh giá-->
                                <div class="add_comment_title">Mời Đánh giá:</div>
                                <?php
                                $temp=0;
                                if(isset($_SESSION['ho_ten_dang_ky'])){
                                    $temp=1;
                                    echo ' <div class="rate" style="margin-right: 500px;">
                                                <div id="1" class="btn-1 rate-btn"></div>
                                                <div id="2" class="btn-2 rate-btn"></div>
                                                <div id="3" class="btn-3 rate-btn"></div>
                                                <div id="4" class="btn-4 rate-btn"></div>
                                                <div id="5" class="btn-5 rate-btn"></div>
                                            </div>';
                                }
                                if($temp==0){
                                    echo '<div class="add_comment_text"><a href="index.php">Đăng Nhập</a> để đánh giá</div>';
                                }?>

                                <!-- Comments -->
                                <?php
                                $sql2="select * from quan_ly_binh_luan where id_quan_ly_kh='$id_khoahoc'";
                                $run2=mysqli_query($conn,$sql2);
                                ?>

                                <div class="comments_container">
                                    <ul class="comments_list">
                                        <?php
                                        while($dong2=mysqli_fetch_array($run2)){
                                            $nguoi_dang_gia=$dong2['nguoi_binh_luan'];
                                            $sql3="select * from star where id_quan_ly_kh='$id_khoahoc' and nguoi_danh_gia='$nguoi_dang_gia'";
                                            $run3=mysqli_query($conn,$sql3);
                                            $dong3=mysqli_fetch_array($run3);
                                        ?>
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image"><div><img src="images/user_1.png" alt=""></div></div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><?php echo $dong2['nguoi_binh_luan'];?></div>

                                                        <div class="comment_rating"><p style="color: #bbb000;">Đánh giá: <?php echo $dong3['rate'];?> Sao</p></div>
<!--                                                        <div class="comment_time ml-auto">1 day ago</div>-->
                                                    </div>
                                                    <div class="comment_text">
                                                        <p><?php echo $dong2['binh_luan'];?></p>
                                                    </div>
<!--                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">-->
<!--                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>-->
<!--                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
<!--                                            <ul>-->
<!--                                                <li>-->
<!--                                                    <div class="comment_item d-flex flex-row align-items-start jutify-content-start">-->
<!--                                                        <div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>-->
<!--                                                        <div class="comment_content">-->
<!--                                                            <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">-->
<!--                                                                <div class="comment_author"><a href="#">John Tyler</a></div>-->
<!--                                                                <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>-->
<!--                                                                <div class="comment_time ml-auto">1 day ago</div>-->
<!--                                                            </div>-->
<!--                                                            <div class="comment_text">-->
<!--                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>-->
<!--                                                            </div>-->
<!--                                                            <div class="comment_extras d-flex flex-row align-items-center justify-content-start">-->
<!--                                                                <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>-->
<!--                                                                <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                            </ul>-->
                                        </li>
                                        <?php }?>
<!--                                        <li>-->
<!--                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">-->
<!--                                                <div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>-->
<!--                                                <div class="comment_content">-->
<!--                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">-->
<!--                                                        <div class="comment_author"><a href="#">Milley Cyrus</a></div>-->
<!--                                                        <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>-->
<!--                                                        <div class="comment_time ml-auto">1 day ago</div>-->
<!--                                                    </div>-->
<!--                                                    <div class="comment_text">-->
<!--                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>-->
<!--                                                    </div>-->
<!--                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">-->
<!--                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>-->
<!--                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                    </ul>
                                    <?php
                                    if(isset($_SESSION['ho_ten_dang_ky'])){
                                        $nguoi_dang_gia = $_SESSION['ho_ten_dang_ky'];
                                    }
                                    ?>
                                    <div class="add_comment_container">
                                        <div class="add_comment_title">Thêm bình luận</div>
                                        <?php
                                        $temp=0;
                                        if(isset($_SESSION['ho_ten_dang_ky'])){
                                            $temp=1;
                                            echo "<form class='modal-content1' action='ajax/xu_ly/xu_ly_quan_ly_binh_luan.php?id_khoahoc=$id_khoahoc&ten_nguoi_bl=$nguoi_dang_gia' role='form' method='post' enctype='multipart/form-data'>
                                                    <div class='container1'>
                                                        <input type='text' placeholder='bình luận' name='binh_luan_khoa_hoc' required>
                                                        <div class='clearfix'>
                                                            <button type='submit' class='signupbtn' name='binh_luan'>Bình luận</button>
                                                        </div>
                                                    </div>
                                                </form>";
                                        }
                                         if($temp==0){
                                            echo '<div class="add_comment_text"><a href="index.php">Đăng Nhập</a> để bình luận</div>';
                                         }?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Feature -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Khóa Học <?php echo $dong['ten_khoa_hoc']; ?></div>
                        <div class="sidebar_feature">
                            <div class="course_price"><?php echo $dong['gia_khoa_hoc']; ?> Nghìn VNĐ</div>

                            <!-- Features -->
                            <div class="feature_list">

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Thời Lượng:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $dong['thoi_luong_khoa_hoc']; ?> Ngày</div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="far fa-file-alt" aria-hidden="true"></i><span>Bài Giảng:</span></div>
                                    <div class="feature_text ml-auto"><?php echo $dong['bai_giang_khoa_hoc']; ?></div>
                                </div>

                                <div class="feature d-flex flex-row align-items-center justify-content-start">
<!--                                    <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>-->
<!--                                    <div class="feature_text ml-auto">35</div>-->
                                </div>
                                <?php if(isset($_SESSION['dang_nhap']) || isset($_SESSION['dang_ky'])){?>
                                    <div class="sidebar_section_title"><a href="ajax/xu_ly/xu_ly_quan_ly_thanh_toan.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh']; ?>&thanh_toan=1"><i class="fas fa-angle-double-right"></i> Bắt Đầu Học</a></div>
<!--                                    bai_hoc.php?id_khoahoc=--><?php //echo $dong['id_quan_ly_kh']; ?><!--&bat_dau_hoc=1-->
                                <?php }else{?>
                                    <div class="sidebar_section_title"><a href="index.php?alert=alert"><i class="fas fa-angle-double-right"></i> Bắt Đầu Học</a></div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <!-- Feature -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Giáo Viên</div>
                        <div class="sidebar_teacher">

                            <div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="teacher_image"><img src="ajax/xu_ly/uploads/giao_vien/<?php echo $dong1['hinh_anh_giao_vien'];?>" alt=""></div>
                                <div class="teacher_title">
                                    <div class="teacher_name"><a href="chi_tiet_giao_vien.php?id_giaovien=<?php echo $dong1['id_quan_ly_gv'];?>"><?php echo $dong1['ten_giao_vien'];?></a></div>
                                    <div class="teacher_position"><?php echo $dong1['chuyen_nganh_giao_vien'];?></div>
                                </div>
                            </div>
<!--                            <div class="teacher_meta_container">-->
                                <!-- Teacher Rating -->
<!--                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">-->
<!--                                    <div class="teacher_meta_title">Average Rating:</div>-->
<!--                                    <div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>-->
<!--                                </div>-->
                               <!-- Teacher Review -->
<!--                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">-->
<!--                                    <div class="teacher_meta_title">Review:</div>-->
<!--                                    <div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>-->
<!--                                </div>-->
                                <!-- Teacher Quizzes -->
<!--                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">-->
<!--                                    <div class="teacher_meta_title">Quizzes:</div>-->
<!--                                    <div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="teacher_info">
                                <p><?php echo $dong1['mo_ta_them_giao_vien'];?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Course -->
                    <?php include ('modules/lop_1/courses/khoahoc_moi.php');?>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(function(){
        $('.rate-btn').hover(function(){
            $('.rate-btn').removeClass('rate-btn-hover');
            var therate = $(this).attr('id');
            for (var i = therate; i >= 0; i--) {
                $('.btn-'+i).addClass('rate-btn-hover');
            };
        });

        var therate=1;
        $('.rate-btn').click(function(){
            therate = $(this).attr('id');
            var dataRate = 'act=rate&id_khoahoc=<?php echo $id_khoahoc; ?>&nguoi_danh_gia=<?php echo $nguoi_dang_gia; ?>&rate='+therate; //
            $('.rate-btn').removeClass('rate-btn-active');
            for (var i = therate; i >= 0; i--) {
                $('.btn-'+i).addClass('rate-btn-active');
            };
            $.ajax({
                type : "POST",
                url : "system/ajax.php",
                data: dataRate,
            });
        });

        $(document).on('click','.rate',function(){
            alert('Bạn chọn '+therate+' sao');
        });
    });
</script>