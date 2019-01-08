<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Cập Nhật Thông Tin</h2>
                    <div class="section_subtitle"><p>Cập Nhật Thông Tin</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
<!--            <div class="col-lg-7 news_col">-->
                <!-- News Post Large -->
<!--                <div class="news_post_large_container">-->
<!--                    <div class="news_post_large">-->
<!--                        <div class="news_post_image"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-lg-5 news_col">
                    <div class="news_post_small">
                        <?php if(isset($_GET['truong_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Cập Nhật Thông Tin</p>
                                    <hr>
                                    <label for="psw"><b>Trường</b></label>
                                    <input type="text" placeholder="Trường" name="truong_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
                        <?php if(isset($_GET['lop_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Cập Nhật Thông Tin</p>
                                    <hr>
                                    <label for="psw"><b>Lớp</b></label>
                                    <input type="text" placeholder="Lớp" name="lop_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
                        <?php if(isset($_GET['ten_cap_nhat_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Cập Nhật Thông Tin</p>
                                    <hr>
                                    <label for="psw"><b>Tên Học Viên</b></label>
                                    <input type="text" placeholder="Tên" name="ten_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
                        <?php if(isset($_GET['taikhoan_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Cập Nhật Thông Tin</p>
                                    <hr>
                                    <label for="psw"><b>Tài Khoản Học Viên</b></label>
                                    <input type="text" placeholder="Tài Khoản" name="tai_khoan_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
                        <?php if(isset($_GET['matkhau_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Cập Nhật Thông Tin</p>
                                    <hr>
                                    <label for="psw"><b>Mật Khẩu Học Viên</b></label>
                                    <input type="text" placeholder="Mật Khẩu" name="mat_khau_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
                        <?php if(isset($_GET['nap_tien_hocvien'])){?>
                            <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="container1">
                                    <p>Nạp Tiền Vào Tài Khoản (để nạp tiền thì phải nhập 3 ký tự đầu là "nap"
                                        và đằng sau thì nhập thêm những ký tự bất kỳ)</p>
                                    <p>Trước khi nạp phải chuyển khoản cho quản lý trước, để quản lý duyệt
                                    , liên hệ sdt: 0965934548 hoặc email: lequocvinh10091996@gmail.com</p>
                                    <hr>
                                    <label for="psw"><b>Mả Thẻ</b></label>
                                    <input type="text" placeholder="Mã Thẻ" name="nap_tien_cap_nhat_dang_ky" required>
                                    <div class="clearfix">
                                        <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Nạp Tiền</button>
                                    </div>
                                </div>
                            </form>
                        <?php }?>
<!--                        <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_cap_nhat_dang_ky.php" role="form" method="post" enctype="multipart/form-data">-->
<!--                            <div class="container1">-->
<!--                                <p>Cập Nhật Thông Tin</p>-->
<!--                                <hr>-->
<!--                                <label for="psw"><b>Trường</b></label>-->
<!--                                <input type="text" placeholder="Trường" name="truong_cap_nhat_dang_ky" required>-->
<!---->
<!--                                <label for="psw"><b>Lớp</b></label>-->
<!--                                <input type="text" placeholder="Lớp" name="lop_cap_nhat_dang_ky" required>-->
<!---->
<!--                                <div class="clearfix">-->
<!--                                    <button type="submit" class="signupbtn" name="cap_nhat_dang_ky">Cập Nhật</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
                    </div>
            </div>
        </div>
    </div>
</div>