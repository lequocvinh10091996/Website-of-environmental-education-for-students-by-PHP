<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                //lấy qua game: id_khoahoc và bat_dau_khoa_hoc

                include ('modules/xu_ly/config/config.php');
                $id_khoahoc=$_GET['id_khoahoc'];
                $sql1="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
                $run1=mysqli_query($conn,$sql1);
                $dong1=mysqli_fetch_array($run1);
                //dang ký
                if(isset($_GET['bat_dau_hoc'])) {
                    $id_dangky = $_SESSION['id_dang_ky'];
                    $sql = "select * from quan_ly_dang_ky where id_quan_ly_dk='$id_dangky'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                    $id_quan_ly_kh = $dong1['id_quan_ly_kh'];
                    $id_quan_ly_dk = $dong['id_quan_ly_dk'];
                    $ten_khoa_hoc = $dong1['ten_khoa_hoc'];
                    $ho_ten_dang_ky = $dong['ho_ten_dang_ky'];
                    $_SESSION['ten_khoa_hoc']=$ten_khoa_hoc;
                    $_SESSION['ho_ten_dang_ky']=$ho_ten_dang_ky;
                    $_SESSION['id_quan_ly_kh']=$id_quan_ly_kh;
                    $sql3 = "select * from quan_ly_nguoi_dang_ky_khoa_hoc";
                    $run3 = mysqli_query($conn, $sql3);
                    $temp=0;
                    while($dong3 = mysqli_fetch_array($run3)) {
                        if ($ho_ten_dang_ky == $dong3['ho_ten_dang_ky'] && $ten_khoa_hoc==$dong3['ten_khoa_hoc']) {
                            $temp=1;
                        }
                        if ($id_quan_ly_dk == '' || $ho_ten_dang_ky == '') {
                            $temp=1;
                        }
                    }
                    //insert bai hoc
                    $id_quan_ly_kh = $dong1['id_quan_ly_kh'];
                    $sql = "select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_quan_ly_kh'";
                    $run = mysqli_query($conn, $sql);
                    $trang_thai='chưa hoàn thành';
                    $trang_thai_khdk='chưa hoàn thành';
                    if($temp==0){
                        $sql = "insert into quan_ly_nguoi_dang_ky_khoa_hoc (id_quan_ly_kh,id_quan_ly_dk,ten_khoa_hoc,ho_ten_dang_ky,trang_thai) values ('$id_quan_ly_kh','$id_quan_ly_dk','$ten_khoa_hoc','$ho_ten_dang_ky','$trang_thai_khdk')";
                        mysqli_query($conn, $sql);
                        while($dong = mysqli_fetch_array($run)){
                            $id_quan_ly_bh=$dong['id_quan_ly_bh'];
                            $ten_bai_hoc=$dong['ten_bai_hoc'];
                            $sql = "insert into quan_ly_trang_thai_nguoi_hoc_khoa_hoc (id_quan_ly_bh,ten_khoa_hoc,ten_bai_hoc,ho_ten_dang_ky,trang_thai) values ('$id_quan_ly_bh','$ten_khoa_hoc','$ten_bai_hoc','$ho_ten_dang_ky','$trang_thai')";
                            mysqli_query($conn, $sql);
                        }
                    }
                    //hiểm thị bài kiểm tra
                    $sql = "select * from quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa where ten_khoa_hoc='$ten_khoa_hoc' and ho_ten_dang_ky='$ho_ten_dang_ky'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                    if($dong['trang_thai']=='chưa hoàn thành'){
                        echo '<div class="blog_post trans_200">';
                        echo '<div class="blog_post_image">';
                        echo '<div class="blog_post_body">';
                        $id_khoahoc_kiemtra=$dong['id_quan_ly_kh'];
//                        $id_bai_dau=$_GET['hoan_thanh'];
//                        $sql="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc' and id_quan_ly_bh ='$id_bai_dau'";
//                        $run=mysqli_query($conn,$sql);
//                        $dong=mysqli_fetch_array($run);
//
//                        $id_khoahoc_kiemtra=$dong['id_quan_ly_kh'];
                        //                            $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc_kiemtra'";
                        //                            $run=mysqli_query($conn,$sql);
                        //                            $dong=mysqli_fetch_array($run);
                        //                            header('location:../../quiz/index_khoa_kiem_tra.php?id_khoahoc_kiemtra='.$id_khoahoc_kiemtra);
                        echo "<h3>Bạn đã hoàn thành các bài học, vào lúc 11 giờ trưa ngày 12/12 chọn vào 'Kiểm Tra Cuối Khóa' để làm bài kiểm tra cuối khóa và hoàn thành khóa học:<a href='ajax/xu_ly/xu_ly_quan_ly_duyet_kiem_tra_khoa_hoc.php?id_khoahoc_kiemtra=$id_khoahoc_kiemtra&kiem_tra=1&ho_ten_dkkt=$ho_ten_dang_ky'>Kiểm Tra Cuối Khóa</a></h3>";
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                $ten_khoa_hoc_backup=$_SESSION['ten_khoa_hoc'];
                $ho_ten_dang_ky_backup=$_SESSION['ho_ten_dang_ky'];
                $id_quan_ly_kh_backup=$_SESSION['id_quan_ly_kh'];
                ?>

                <div class="blog_post_container">

                    <!-- Blog Post -->
<!--                    --><?php
//                    $i=$_GET['id_khoahoc'];
//                    while($i<=$id_khoahoc){
//                    ?>
                    <?php if(isset($_GET['hoan_thanh'])){?>
                        <?php
                        //lấy ra bài đã học
                        $sql="select * from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc_backup' and ho_ten_dang_ky ='$ho_ten_dang_ky_backup' and trang_thai='hoàn thành'";
                        $run=mysqli_query($conn,$sql);
                        $i=0;
                        while($dong=mysqli_fetch_array($run)){
                            $_SESSION['bai_hoc_hoan_thanh'][$i]=$dong['ten_bai_hoc'];
                            $i++;
                        }
                        $bai_hoan_thanh_cuoi=$i;

                        $id_bai_dau=$_GET['hoan_thanh'];
                        $sql="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc' and id_quan_ly_bh >'$id_bai_dau'";
                        $run=mysqli_query($conn,$sql);
                        $dong=mysqli_fetch_array($run);

                        $id_bai_cuoi=$dong['id_quan_ly_bh'];
                        $sql2="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc' and id_quan_ly_bh <='$id_bai_cuoi'";
                        $run2=mysqli_query($conn,$sql2);
//                        $dong2=mysqli_fetch_array($run2);
                        $chuyen_kiem_tra_khoa='yes';
                        $i=0;

                        //chuyển quan trang game

                        $sql_game="select count(*) from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc_backup' and ho_ten_dang_ky ='$ho_ten_dang_ky_backup' and trang_thai='hoàn thành'";
                        $run_game=mysqli_query($conn,$sql_game);
                        $dong_game=mysqli_fetch_array($run_game);
                        $hoan_thanh_2_bai=$dong_game[0];
                        if(isset($_SESSION['game'])){
                            $hoan_thanh_2_bai=0;
                        }

                        while($dong2=mysqli_fetch_array($run2)){
                            $lop_khoa_hoc = $dong2['lop_khoa_hoc'];
                            $hinh_anh_bai_hoc = $dong2['hinh_anh_bai_hoc'];
                            $id_quan_ly_bh = $dong2['id_quan_ly_bh'];
                            $ten_bai_hoc_hoan_thanh_1_so = $dong2['ten_bai_hoc'];
                            $mo_ta_ngan_bai_hoc = $dong2['mo_ta_ngan_bai_hoc'];
                            $ten_bai_hoan_thanh_dau_tien ='null';
                            if ($i < $bai_hoan_thanh_cuoi) {
                                $ten_bai_hoan_thanh_dau_tien = $_SESSION['bai_hoc_hoan_thanh'][$i];
                                $i++;
                            }

                            if ($ten_bai_hoan_thanh_dau_tien == $ten_bai_hoc_hoan_thanh_1_so) {
                                echo '<div class="blog_post trans_200">';
                                echo '<div class="blog_post_image"><img src="ajax/xu_ly/uploads/lop_' . $lop_khoa_hoc . '/' . $hinh_anh_bai_hoc . '" alt=""></div>';
                                echo '<div class="blog_post_body">';
                                echo '<div class="blog_post_title"><a href="noi_dung_bai_hoc.php?id_baihoc=' . $id_quan_ly_bh . '">' . $ten_bai_hoc_hoan_thanh_1_so . '</a></div>';
                                echo '<div class="blog_post_meta">';
                                echo '</div>';
                                echo '<div class="blog_post_text">';
                                echo '<p>' . $mo_ta_ngan_bai_hoc . '</p>';
                                echo '<p style="color: red;">Đã học</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            } else {
                                if($hoan_thanh_2_bai==2) {
                                    echo '<div class="blog_post trans_200">';
                                    echo '<div class="blog_post_image"><img src="images/game.png" alt=""></div>';
                                    echo '<div class="blog_post_body">';
                                    echo "<div class='blog_post_title'><a href='game/index.php?id_khoahoc=$id_khoahoc'>Giải trí</a></div>";
                                    echo '<div class="blog_post_meta">';
                                    echo '</div>';
                                    echo '<div class="blog_post_text">';
                                    echo '<p>Giải trí</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    $hoan_thanh_2_bai=0;
                                }
                                echo '<div class="blog_post trans_200">';
                                echo '<div class="blog_post_image"><img src="ajax/xu_ly/uploads/lop_' . $lop_khoa_hoc . '/' . $hinh_anh_bai_hoc . '" alt=""></div>';
                                echo '<div class="blog_post_body">';
                                echo '<div class="blog_post_title"><a href="noi_dung_bai_hoc.php?id_baihoc=' . $id_quan_ly_bh . '">' . $ten_bai_hoc_hoan_thanh_1_so . '</a></div>';
                                echo '<div class="blog_post_meta">';
                                echo '</div>';
                                echo '<div class="blog_post_text">';
                                echo '<p>' . $mo_ta_ngan_bai_hoc . '</p>';
                                echo '<p style="color: red;">Hoàn thành bài học để học bài kế tiếp >></p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            $chuyen_kiem_tra_khoa='no';

                        }

                        ?>


                        <?php
                        $trang_thai_hoan_thanh_kh='chưa hoàn thành';
                        $diem_kiem_tra_cuoi_khoa=0;
                        $trang_thai_duyet='chưa duyệt';
                        if($chuyen_kiem_tra_khoa=='yes'){
                            echo '<div class="blog_post trans_200">';
                            echo '<div class="blog_post_image">';
                            echo '<div class="blog_post_body">';
                                $id_bai_dau=$_GET['hoan_thanh'];
                                $sql="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc' and id_quan_ly_bh ='$id_bai_dau'";
                                $run=mysqli_query($conn,$sql);
                                $dong=mysqli_fetch_array($run);

                                $id_khoahoc_kiemtra=$dong['id_quan_ly_kh'];
    //                            $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc_kiemtra'";
    //                            $run=mysqli_query($conn,$sql);
    //                            $dong=mysqli_fetch_array($run);
    //                            header('location:../../quiz/index_khoa_kiem_tra.php?id_khoahoc_kiemtra='.$id_khoahoc_kiemtra);
                            echo "<h3>Bạn đã hoàn thành các bài học, vào lúc 11 giờ trưa ngày 12/12 chọn vào 'Kiểm Tra Cuối Khóa' để làm bài kiểm tra cuối khóa và hoàn thành khóa học:<a href='ajax/xu_ly/xu_ly_quan_ly_duyet_kiem_tra_khoa_hoc.php?id_khoahoc_kiemtra=$id_khoahoc_kiemtra&kiem_tra=1&ho_ten_dkkt=$ho_ten_dang_ky_backup'>Kiểm Tra Cuối Khóa</a></h3>";
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            //insert trạng thái bài kiểm tra khóa học
                            $sql = "insert into quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa (id_quan_ly_kh,ten_khoa_hoc,ho_ten_dang_ky,diem_kiem_tra_cuoi_khoa,trang_thai,trang_thai_duyet_kiem_tra) values ('$id_quan_ly_kh_backup','$ten_khoa_hoc_backup','$ho_ten_dang_ky_backup','$diem_kiem_tra_cuoi_khoa','$trang_thai_hoan_thanh_kh','$trang_thai_duyet')";
                            mysqli_query($conn, $sql);
                        }
                        ?>
                    <?php }else{?>
<!--                        hoàn thành 1 số phần-->
                        <?php

                        $sql="select * from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc' and ho_ten_dang_ky ='$ho_ten_dang_ky' and trang_thai='hoàn thành'";
                        $run=mysqli_query($conn,$sql);
                        $i=0;
                        while($dong=mysqli_fetch_array($run)){
                            $_SESSION['bai_hoc_hoan_thanh'][$i]=$dong['ten_bai_hoc'];
                            $i++;
                        }
                        $bai_hoan_thanh_cuoi=$i;

                        $sql="select * from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc' and ho_ten_dang_ky='$ho_ten_dang_ky' and trang_thai='hoàn thành'";
                        $run=mysqli_query($conn,$sql);
                        $mot_so_bai=0;
                        while($dong=mysqli_fetch_array($run)) {
                            $mot_so_bai = 1;
                            $id_quan_ly_bh = $dong['id_quan_ly_bh'];
                        }
                        if($mot_so_bai==1) {
                            $sql = "select * from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ho_ten_dang_ky='$ho_ten_dang_ky' and id_quan_ly_bh>'$id_quan_ly_bh' and ten_khoa_hoc='$ten_khoa_hoc'";
                            $run = mysqli_query($conn, $sql);
                            $dong = mysqli_fetch_array($run);
                            $id_quan_ly_bh = $dong['id_quan_ly_bh'];

                            $sql1 = "select * from quan_ly_bai_hoc where id_quan_ly_bh<='$id_quan_ly_bh' and id_quan_ly_kh='$id_khoahoc'";
                            $run1 = mysqli_query($conn, $sql1);
                            $i = 0;

                            //chuyển quan trang game

                            $sql_game="select count(*) from quan_ly_trang_thai_nguoi_hoc_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc_backup' and ho_ten_dang_ky ='$ho_ten_dang_ky_backup' and trang_thai='hoàn thành'";
                            $run_game=mysqli_query($conn,$sql_game);
                            $dong_game=mysqli_fetch_array($run_game);
                            $hoan_thanh_2_bai=$dong_game[0];
                            if(isset($_SESSION['game'])){
                                $hoan_thanh_2_bai=0;
                            }

                            while ($dong1 = mysqli_fetch_array($run1)) {
                                $lop_khoa_hoc = $dong1['lop_khoa_hoc'];
                                $hinh_anh_bai_hoc = $dong1['hinh_anh_bai_hoc'];
                                $id_quan_ly_bh = $dong1['id_quan_ly_bh'];
                                $ten_bai_hoc_hoan_thanh_1_so = $dong1['ten_bai_hoc'];
                                $mo_ta_ngan_bai_hoc = $dong1['mo_ta_ngan_bai_hoc'];
                                if ($i < $bai_hoan_thanh_cuoi) {
                                    $ten_bai_hoan_thanh_dau_tien = $_SESSION['bai_hoc_hoan_thanh'][$i];
                                    $i++;
                                }
                                if ($ten_bai_hoan_thanh_dau_tien == $ten_bai_hoc_hoan_thanh_1_so) {
                                    echo '<div class="blog_post trans_200">';
                                    echo '<div class="blog_post_image"><img src="ajax/xu_ly/uploads/lop_' . $lop_khoa_hoc . '/' . $hinh_anh_bai_hoc . '" alt=""></div>';
                                    echo '<div class="blog_post_body">';
                                    echo '<div class="blog_post_title"><a href="noi_dung_bai_hoc.php?id_baihoc=' . $id_quan_ly_bh . '">' . $ten_bai_hoc_hoan_thanh_1_so . '</a></div>';
                                    echo '<div class="blog_post_meta">';
                                    echo '</div>';
                                    echo '<div class="blog_post_text">';
                                    echo '<p>' . $mo_ta_ngan_bai_hoc . '</p>';
                                    echo '<p style="color: red;">Đã học</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                } else {
                                    if($hoan_thanh_2_bai==2) {
                                        echo '<div class="blog_post trans_200">';
                                        echo '<div class="blog_post_image"><img src="images/game.png" alt=""></div>';
                                        echo '<div class="blog_post_body">';
                                        echo "<div class='blog_post_title'><a href='game/index.php?id_khoahoc=$id_khoahoc'>Giải trí</a></div>";
                                        echo '<div class="blog_post_meta">';
                                        echo '</div>';
                                        echo '<div class="blog_post_text">';
                                        echo '<p>Giải trí</p>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        $hoan_thanh_2_bai=0;
                                    }
                                    echo '<div class="blog_post trans_200">';
                                    echo '<div class="blog_post_image"><img src="ajax/xu_ly/uploads/lop_' . $lop_khoa_hoc . '/' . $hinh_anh_bai_hoc . '" alt=""></div>';
                                    echo '<div class="blog_post_body">';
                                    echo '<div class="blog_post_title"><a href="noi_dung_bai_hoc.php?id_baihoc=' . $id_quan_ly_bh . '">' . $ten_bai_hoc_hoan_thanh_1_so . '</a></div>';
                                    echo '<div class="blog_post_meta">';
                                    echo '</div>';
                                    echo '<div class="blog_post_text">';
                                    echo '<p>' . $mo_ta_ngan_bai_hoc . '</p>';
                                    echo '<p style="color: red;">Hoàn thành bài học để học bài kế tiếp >></p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }
                        }
                        ?>
<!--                        hoàn thành hết-->
                        <?php

                        ?>
<!--                        chưa hoàn thành-->
                        <?php
                        if($mot_so_bai==0){

                        $sql="select * from quan_ly_bai_hoc where id_quan_ly_kh='$id_khoahoc'";
                        $run=mysqli_query($conn,$sql);
                        $dong=mysqli_fetch_array($run);
                        $ton_tai_bai_hoc='';
                        $ton_tai_bai_hoc=$dong['ten_bai_hoc'];
                        if($ton_tai_bai_hoc!=''){
                        ?>
                            <div class="blog_post trans_200">
                                <div class="blog_post_image"><img src="ajax/xu_ly/uploads/lop_<?php echo $dong['lop_khoa_hoc'];?>/<?php echo $dong['hinh_anh_bai_hoc']; ?>" alt=""></div>
                                <div class="blog_post_body">
                                    <div class="blog_post_title"><a href="noi_dung_bai_hoc.php?id_baihoc=<?php echo $dong['id_quan_ly_bh']; ?>"><?php echo $dong['ten_bai_hoc']; ?></a></div>
                                    <div class="blog_post_meta">

                                    </div>
                                    <div class="blog_post_text">
                                        <p><?php echo $dong['mo_ta_ngan_bai_hoc']; ?></p>
                                        <p style="color: red;">Hoàn thành bài học để học bài kế tiếp >></p>
                                    </div>
                                </div>
                            </div>
                        <?php }else{
                            echo '<div class="blog_post trans_200">';
                            echo '<div class="blog_post_image"></div>';
                            echo '<div class="blog_post_body">';
                            echo '<div class="blog_post_title"><a href="#">Chưa có bài học</a></div>';
                            echo '<div class="blog_post_meta">';
                            echo '</div>';
                            echo '<div class="blog_post_text">';
                            echo '<p>Chưa có bài học</p>';
                            echo '<p style="color: red;">Chưa có bài học</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }}?>
                    <?php }?>
<!--                    lấy ra chữ đã học-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">With Changing Students and Times</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_video_container">-->
<!--                            <video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_2.jpg"}'>-->
<!--                                <source src="images/mov_bbb.mp4" type="video/mp4">-->
<!--                                <source src="images/mov_bbb.ogg" type="video/ogg">-->
<!--                                Your browser does not support HTML5 video.-->
<!--                            </video>-->
<!--                        </div>-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">Building Skills Outside the Classroom With New Ways</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">Law Schools Debate a Contentious Testing Alternative</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_video_container">-->
<!--                            <video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_4.jpg"}'>-->
<!--                                <source src="images/mov_bbb.mp4" type="video/mp4">-->
<!--                                <source src="images/mov_bbb.ogg" type="video/ogg">-->
<!--                                Your browser does not support HTML5 video.-->
<!--                            </video>-->
<!--                        </div>-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">Building Skills Outside the Classroom With New Ways</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_image"><img src="images/blog_5.jpg" alt=""></div>-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Blog Post -->
<!--                    <div class="blog_post trans_200">-->
<!--                        <div class="blog_post_body">-->
<!--                            <div class="blog_post_title"><a href="blog_single.html">With Changing Students and Times</a></div>-->
<!--                            <div class="blog_post_meta">-->
<!--                                <ul>-->
<!--                                    <li><a href="#">admin</a></li>-->
<!--                                    <li><a href="#">november 11, 2017</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="blog_post_text">-->
<!--                                <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>

    </div>
</div>