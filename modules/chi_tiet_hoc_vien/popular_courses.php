<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Những Khóa Học Đặc Sắc</h2>
                    <div class="section_subtitle"><p>Những Khóa Học Hay</p></div>
                </div>
            </div>
        </div>
        <div class="row courses_row">
            <?php
            include ('modules/xu_ly/config/config.php');
            $sql="select * from quan_ly_khoa_hoc";
            $run=mysqli_query($conn,$sql);
            ?>
            <?php
            while($dong=mysqli_fetch_array($run)){
            ?>
            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="ajax/xu_ly/uploads/lop_<?php echo $dong['lop_khoa_hoc']; ?>/<?php echo $dong['hinh_anh_khoa_hoc']; ?>" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="chi_tiet_khoa_hoc.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh']; ?>"><?php echo $dong['ten_khoa_hoc']; ?></a></h3>
                        <div class="course_teacher">Lớp <?php echo $dong['lop_khoa_hoc']; ?></div>
                        <div class="course_text">
                            <p><?php echo $dong['mo_ta_ngan_khoa_hoc']; ?></p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>20 Student</span>
                            </div>
                            <div class="course_info">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5 Ratings</span>
                            </div>
                            <div class="course_price ml-auto">$130</div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
            <!-- Course -->
<!--            <div class="col-lg-4 course_col">-->
<!--                <div class="course">-->
<!--                    <div class="course_image"><img src="images/course_2.jpg" alt=""></div>-->
<!--                    <div class="course_body">-->
<!--                        <h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>-->
<!--                        <div class="course_teacher">Ms. Lucius</div>-->
<!--                        <div class="course_text">-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="course_footer">-->
<!--                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                            <div class="course_info">-->
<!--                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                                <span>20 Student</span>-->
<!--                            </div>-->
<!--                            <div class="course_info">-->
<!--                                <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                                <span>5 Ratings</span>-->
<!--                            </div>-->
<!--                            <div class="course_price ml-auto">Free</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Course -->
<!--            <div class="col-lg-4 course_col">-->
<!--                <div class="course">-->
<!--                    <div class="course_image"><img src="images/course_3.jpg" alt=""></div>-->
<!--                    <div class="course_body">-->
<!--                        <h3 class="course_title"><a href="course.html">Starting a Startup</a></h3>-->
<!--                        <div class="course_teacher">Mr. Charles</div>-->
<!--                        <div class="course_text">-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="course_footer">-->
<!--                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                            <div class="course_info">-->
<!--                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                                <span>20 Student</span>-->
<!--                            </div>-->
<!--                            <div class="course_info">-->
<!--                                <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                                <span>5 Ratings</span>-->
<!--                            </div>-->
<!--                            <div class="course_price ml-auto"><span>$320</span>$220</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div class="courses_button trans_200"><a href="#">view all courses</a></div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>