<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Thông Tin Học Viên</h2>
                    <div class="section_subtitle"><p>Thông Tin Học Viên</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
<!--            <div class="col-lg-7 news_col">-->
                <?php
                include ('modules/xu_ly/config/config.php');
                $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
                $sql="select * from quan_ly_dang_ky where ho_ten_dang_ky='$ho_ten_dang_ky'";
                $run=mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($run);
                ?>
                <!-- News Post Large -->
<!--                <div class="news_post_large_container">-->
<!--                    <div class="news_post_large">-->
<!--                        <div class="news_post_image"><img src="ajax/xu_ly/uploads/giao_vien/--><?php //echo $dong['hinh_anh_giao_vien']; ?><!--" alt="" style="float: right;"></div>-->
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
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

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
                    <table border="0" >
                        <tr>
                            <td>
                                <div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Tên Học Viên:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['ho_ten_dang_ky'];?></h4>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?ten_cap_nhat_hocvien=<?php echo $dong['ho_ten_dang_ky'];?> " >Cập Nhật</a></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>
                                <div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Tài Khoản:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['ten_tai_khoan_dang_ky'];?></h4>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?taikhoan_hocvien=<?php echo $dong['ten_tai_khoan_dang_ky'];?> " >Cập Nhật</a></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Mật Khẩu:</h3></div><h4 style="color: #1c7430;"><?php echo $_SESSION['mat_khau_hien_chinh_sua'];?></h4>
                                </div></td>
                            <td>&nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?matkhau_hocvien=<?php echo $dong['mat_khau_dang_ky'];?> " >Cập Nhật</a></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Trường:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['truong_dang_ky'];?></h4>
                                </div></td>
                            <td>&nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?ten_hocvien=<?php echo $dong['ho_ten_dang_ky'];?>&truong_hocvien=<?php echo $dong['truong_dang_ky'];?> " >Cập Nhật</a></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Lớp:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['lop_dang_ky'];?></h4>
                                </div></td>
                            <td>&nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?ten_hocvien=<?php echo $dong['ho_ten_dang_ky'];?>&lop_hocvien=<?php echo $dong['lop_dang_ky'];?> " >Cập Nhật</a></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><div class="news_post_small">
                                    <div class="news_post_small_title"><h3>Tiền Tong Tài Khoản:</h3></div><h4 style="color: #1c7430;"><?php echo $dong['so_tien_dang_ky'];?>.000 VNĐ</h4>
                                </div></td>
                            <td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
                            <td><a href="cap_nhat_thong_tin_hoc_vien.php?ten_hocvien=<?php echo $dong['ho_ten_dang_ky'];?>&nap_tien_hocvien=1">Nạp Tiền</a></td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>