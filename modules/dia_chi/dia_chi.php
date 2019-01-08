<?php
if(isset($_SESSION['gui_email'])){
    if($_SESSION['gui_email']=='thành công'){
        echo "<script>alert('Bạn đã gữi tin nhắn thành công !')</script>";
        unset($_SESSION['gui_email']);
    }
}
?>
<div class="contact">
    <div class="contact_info_container">
    <div class="container">
        <div class="row">

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact_form">

                    <div class="contact_info_title">Gửi Tin Nhắn</div>
                    <form class="comment_form" action="ajax/xu_ly/xu_ly_quan_ly_gui_email.php" role="form" method="post" enctype="multipart/form-data">
                        <div>
                            <div class="form_title">Tên</div>
                            <input type="text" class="comment_input" required="required" name="ten_gui_email">
                        </div>
                        <div>
                            <div class="form_title">Email</div>
                            <input type="text" class="comment_input" required="required" name="email_gui_email">
                        </div>
                        <div>
                            <div class="form_title">Tin Nhắn</div>
                            <textarea class="comment_input comment_textarea" required="required" name="tin_nhan_gui_email"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="comment_button trans_200" name="gui_email">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="contact_info">
                    <div class="contact_info_title">Thông Tin Liên Hệ</div>
<!--                    <div class="contact_info_text">-->
<!--                        <p>Thông Tin Liên Hệ</p>-->
<!--                    </div>-->
                    <div class="contact_info_location">
                        <div class="contact_info_location_title">Văn Phòng Cần Thơ</div>
                        <ul class="location_list">
                            <li>Văn Phòng Cần Thơ</li>
                            <li>1-234-567-89011</li>
                            <li>info.deercreative@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact_info_location">
                        <div class="contact_info_location_title">Văn Phòng Hậu Giang</div>
                        <ul class="location_list">
                            <li>Văn Phòng Hậu Giang</li>
                            <li>1-234-567-89011</li>
                            <li>info.deercreative@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>