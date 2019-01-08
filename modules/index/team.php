<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Những Giáo Viên Tốt Nhất</h2>
                    <div class="section_subtitle"><p>Những Giáo Viên Tốt Nhất</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">
            <?php
            include ('modules/xu_ly/config/config.php');
            $sql="select * from quan_ly_giao_vien";
            $run=mysqli_query($conn,$sql);
            ?>
            <?php
            while($dong=mysqli_fetch_array($run)){
            ?>
            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="ajax/xu_ly/uploads/giao_vien/<?php echo $dong['hinh_anh_giao_vien'];?>" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="chi_tiet_giao_vien.php?id_giaovien=<?php echo $dong['id_quan_ly_gv'];?>"><?php echo $dong['ten_giao_vien'];?></a></div>
                        <div class="team_subtitle"><?php echo $dong['chuyen_nganh_giao_vien'];?></div>
<!--                        <div class="social_list">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
            <!-- Team Item -->
<!--            <div class="col-lg-3 col-md-6 team_col">-->
<!--                <div class="team_item">-->
<!--                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>-->
<!--                    <div class="team_body">-->
<!--                        <div class="team_title"><a href="#">William James</a></div>-->
<!--                        <div class="team_subtitle">Designer & Website</div>-->
<!--                        <div class="social_list">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Team Item -->
<!--            <div class="col-lg-3 col-md-6 team_col">-->
<!--                <div class="team_item">-->
<!--                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>-->
<!--                    <div class="team_body">-->
<!--                        <div class="team_title"><a href="#">John Tyler</a></div>-->
<!--                        <div class="team_subtitle">Quantum mechanics</div>-->
<!--                        <div class="social_list">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Team Item -->
<!--            <div class="col-lg-3 col-md-6 team_col">-->
<!--                <div class="team_item">-->
<!--                    <div class="team_image"><img src="images/team_4.jpg" alt=""></div>-->
<!--                    <div class="team_body">-->
<!--                        <div class="team_title"><a href="#">Veronica Vahn</a></div>-->
<!--                        <div class="team_subtitle">Math & Physics</div>-->
<!--                        <div class="social_list">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>
</div>