<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Thông Tin Giáo Viên</h2>
                    <div class="section_subtitle"><p>Thông Tin Giáo Viên</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">
                <?php
                include ('modules/xu_ly/config/config.php');
                $id_giaovien=$_GET['id_giaovien'];
                $sql="select * from quan_ly_giao_vien where id_quan_ly_gv='$id_giaovien'";
                $run=mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($run)
                ?>
                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image"><img src="ajax/xu_ly/uploads/giao_vien/<?php echo $dong['hinh_anh_giao_vien']; ?>" alt="" style="float: right;"></div>
<!--                        <div class="news_post_large_title"><a href="chi_tiet_khoa_hoc.php?id_khoahoc=--><?php //echo $dong['id_quan_ly_kh']; ?><!--">--><?php //echo $dong['ten_khoa_hoc']; ?><!--</a></div>-->
<!--                        <div class="news_post_meta">-->
<!--                            <ul>-->
<!--                                <li><a href="#">admin</a></li>-->
<!--                                <li><a href="#">november 11, 2017</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="news_post_text">-->
<!--                            <p>--><?php //echo $dong['mo_ta_ngan_khoa_hoc'];?><!--</p>-->
<!--                        </div>-->
<!--                        <div class="news_post_link"><a href="chi_tiet_khoa_hoc.php?id_khoahoc=--><?php //echo $dong['id_quan_ly_kh']; ?><!--">đọc Thêm</a></div>-->
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">
<!--                    --><?php
//                    include ('modules/xu_ly/config/config.php');
//                    $sql="select * from quan_ly_khoa_hoc where id_quan_ly_kh>(select min(id_quan_ly_kh) from quan_ly_khoa_hoc)";
//                    $run=mysqli_query($conn,$sql);
//                    ?>
<!--                    --><?php
//                    while($dong=mysqli_fetch_array($run)){
//                    ?>
                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><h3>Tên Giáo Viên:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['ten_giao_vien']; ?></h4>
<!--                        <div class="news_post_meta">-->
<!--                            <ul>-->
<!--                                <li><a href="#">admin</a></li>-->
<!--                                <li><a href="#">november 11, 2017</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                    <div class="news_post_small">
                        <div class="news_post_small_title"><h3>Chuyên Ngành:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['chuyen_nganh_giao_vien']; ?></h4>
                        <!--                        <div class="news_post_meta">-->
                        <!--                            <ul>-->
                        <!--                                <li><a href="#">admin</a></li>-->
                        <!--                                <li><a href="#">november 11, 2017</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                    <div class="news_post_small">
                        <div class="news_post_small_title"><h3>Mô Tả Thêm:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['mo_ta_them_giao_vien']; ?></h4>
                        <!--                        <div class="news_post_meta">-->
                        <!--                            <ul>-->
                        <!--                                <li><a href="#">admin</a></li>-->
                        <!--                                <li><a href="#">november 11, 2017</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
<!--                        --><?php
//                    }
//                    ?>
                    <!-- News Posts Small -->
<!--                    <div class="news_post_small">-->
<!--                        <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit Card Comparison Site Survey (Summer 2018)</a></div>-->
<!--                        <div class="news_post_meta">-->
<!--                            <ul>-->
<!--                                <li><a href="#">admin</a></li>-->
<!--                                <li><a href="#">november 11, 2017</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- News Posts Small -->
<!--                    <div class="news_post_small">-->
<!--                        <div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques gratuitas una encuesta de Consumer Action</a></div>-->
<!--                        <div class="news_post_meta">-->
<!--                            <ul>-->
<!--                                <li><a href="#">admin</a></li>-->
<!--                                <li><a href="#">november 11, 2017</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- News Posts Small -->
<!--                    <div class="news_post_small">-->
<!--                        <div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have fewer repayment or forgiveness options</a></div>-->
<!--                        <div class="news_post_meta">-->
<!--                            <ul>-->
<!--                                <li><a href="#">admin</a></li>-->
<!--                                <li><a href="#">november 11, 2017</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>
    </div>
</div>