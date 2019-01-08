<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-8">
<!--                search-->
<!--                --><?php //include ('courses/search.php');?>
<!--                courses-->
                <?php include ('courses/course.php');?>
            </div>
            <!-- Courses Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Categories -->
                    <?php include ('courses/khoahoc.php');?>
                    <!-- Latest Course -->
                    <?php include ('courses/khoahoc_moi.php');?>
<!--                    khóa học đang học-->

                    <?php
                    if(isset($_SESSION['ho_ten_dang_ky'])){
                        include ('courses/khoahoc_dang_hoc.php');
                    }
                    ?>
                    <!-- Gallery -->
                    <?php include ('courses/hinhanh.php');?>
                    <!-- Tags -->
                    <!--                        <div class="sidebar_section">-->
                    <!--                            <div class="sidebar_section_title">Tags</div>-->
                    <!--                            <div class="sidebar_tags">-->
                    <!--                                <ul class="tags_list">-->
                    <!--                                    <li><a href="#">creative</a></li>-->
                    <!--                                    <li><a href="#">unique</a></li>-->
                    <!--                                    <li><a href="#">photography</a></li>-->
                    <!--                                    <li><a href="#">ideas</a></li>-->
                    <!--                                    <li><a href="#">wordpress</a></li>-->
                    <!--                                    <li><a href="#">startup</a></li>-->
                    <!--                                </ul>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!-- Banner -->
<!--                    --><?php //include ('courses/download.php');?>
                </div>
            </div>
        </div>
    </div>
</div>