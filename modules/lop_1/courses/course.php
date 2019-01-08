<div class="courses_container">
    <div class="row courses_row">

        <!-- Course -->
        <?php if(isset($_POST['tim_kiem'])){
            include ('modules/xu_ly/config/config.php');
            $ten_khoa_hoc_tim_kiem=$_POST['tim_kiem_khoa_hoc'];
            $sql="select * from quan_ly_khoa_hoc where ten_khoa_hoc LIKE '%$ten_khoa_hoc_tim_kiem%'";
            $run=mysqli_query($conn,$sql);
            echo '<div class="row">';
            echo    '<div class="col">';
            echo      '<div class="section_title_container text-center">';
            echo         '<h2 class="section_title">Những Khóa Học Tìm Thấy</h2>';
//            echo       '<div class="section_subtitle"><p>Không tìm thấy khóa học nào</p></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            if($count=mysqli_num_rows($run)==0){

                echo '<div class="section_subtitle"><br><br><p>Không tìm thấy khóa học nào</p></div>';

            }else{
                while($dong=mysqli_fetch_array($run)){?>
                    <div class="col-lg-6 course_col">
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
                                        <span>20 Học Viên</span>
                                    </div>
                                    <div class="course_info">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5 Sao</span>
                                    </div>
                                    <div class="course_price ml-auto"><?php echo $dong['gia_khoa_hoc']; ?>K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }else {
            include ('modules/xu_ly/config/config.php');
            $lop=$_GET['lop'];
            $sql="select * from quan_ly_khoa_hoc where lop_khoa_hoc='$lop'";
            $run=mysqli_query($conn,$sql);
            $i=0;
            while($dong=mysqli_fetch_array($run)){
                $ten_khoa_hoc=$dong['ten_khoa_hoc'];
                $id_khoahoc=$dong['id_quan_ly_kh'];

                $sql1="select count(*) from quan_ly_nguoi_dang_ky_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc'";
                $run1=mysqli_query($conn,$sql1);
                $dong1=mysqli_fetch_array($run1);

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
                <div class="col-lg-6 course_col">
                    <div class="course">
                        <div class="course_image"><img src="ajax/xu_ly/uploads/lop_<?php echo $lop; ?>/<?php echo $dong['hinh_anh_khoa_hoc']; ?>" alt=""></div>
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
                                    <span><?php echo $dong1[0];?> Học Viên</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span><?php echo $rate_value;?> Sao</span>
                                </div>
                                <div class="course_price ml-auto"><?php echo $dong['gia_khoa_hoc']; ?>K</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
                }
            }?>
        <!-- Course -->
        <div class="col-lg-6 course_col">
<!--            <div class="course">-->
<!--                <div class="course_image"><img src="images/course_5.jpg" alt=""></div>-->
<!--                <div class="course_body">-->
<!--                    <h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>-->
<!--                    <div class="course_teacher">Ms. Lucius</div>-->
<!--                    <div class="course_text">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="course_footer">-->
<!--                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                            <span>20 Student</span>-->
<!--                        </div>-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                            <span>5 Ratings</span>-->
<!--                        </div>-->
<!--                        <div class="course_price ml-auto">Free</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!---->
        <!-- Course -->
        <div class="col-lg-6 course_col">
<!--            <div class="course">-->
<!--                <div class="course_image"><img src="images/course_6.jpg" alt=""></div>-->
<!--                <div class="course_body">-->
<!--                    <h3 class="course_title"><a href="course.html">Starting a Startup</a></h3>-->
<!--                    <div class="course_teacher">Mr. Charles</div>-->
<!--                    <div class="course_text">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="course_footer">-->
<!--                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                            <span>20 Student</span>-->
<!--                        </div>-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                            <span>5 Ratings</span>-->
<!--                        </div>-->
<!--                        <div class="course_price ml-auto"><span>$320</span>$220</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!---->
       <!-- Course -->
        <div class="col-lg-6 course_col">
<!--            <div class="course">-->
<!--                <div class="course_image"><img src="images/course_7.jpg" alt=""></div>-->
<!--                <div class="course_body">-->
<!--                    <h3 class="course_title"><a href="chi_tiet_khoa_hoc.php">Learn Basic German Fast</a></h3>-->
<!--                    <div class="course_teacher">Mr. John Taylor</div>-->
<!--                    <div class="course_text">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="course_footer">-->
<!--                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                            <span>20 Student</span>-->
<!--                        </div>-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                            <span>5 Ratings</span>-->
<!--                        </div>-->
<!--                        <div class="course_price ml-auto">$130</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!---->
        <!-- Course -->
        <div class="col-lg-6 course_col">
<!--            <div class="course">-->
<!--                <div class="course_image"><img src="images/course_8.jpg" alt=""></div>-->
<!--                <div class="course_body">-->
<!--                    <h3 class="course_title"><a href="course.html">Business Groud Up</a></h3>-->
<!--                    <div class="course_teacher">Ms. Lucius</div>-->
<!--                    <div class="course_text">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="course_footer">-->
<!--                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                            <span>20 Student</span>-->
<!--                        </div>-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                            <span>5 Ratings</span>-->
<!--                        </div>-->
<!--                        <div class="course_price ml-auto">Free</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
<!---->
        <!-- Course -->
<!--        <div class="col-lg-6 course_col">-->
<!--            <div class="course">-->
<!--                <div class="course_image"><img src="images/course_9.jpg" alt=""></div>-->
<!--                <div class="course_body">-->
<!--                    <h3 class="course_title"><a href="course.html">Java Technology</a></h3>-->
<!--                    <div class="course_teacher">Mr. Charles</div>-->
<!--                    <div class="course_text">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="course_footer">-->
<!--                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                            <span>20 Student</span>-->
<!--                        </div>-->
<!--                        <div class="course_info">-->
<!--                            <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                            <span>5 Ratings</span>-->
<!--                        </div>-->
<!--                        <div class="course_price ml-auto"><span>$320</span>$220</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="row pagination_row">
        <div class="col">
            <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                <ul class="pagination_list">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
                <div class="courses_show_container ml-auto clearfix">
                    <!--                                        <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>-->
                    <!--                                        <div class="courses_show_content">-->
                    <!--                                            <span>Show: </span>-->
                    <!--                                            <select id="courses_show_select" class="courses_show_select">-->
                    <!--                                                <option>06</option>-->
                    <!--                                                <option>12</option>-->
                    <!--                                                <option>24</option>-->
                    <!--                                                <option>36</option>-->
                    <!--                                            </select>-->
                    <!--                                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
