<?php
if(isset($_SESSION['gui_email'])){
    if($_SESSION['gui_email']=='thành công'){
        echo "<script>alert('Bạn đã gữi tin nhắn thành công !')</script>";
        unset($_SESSION['gui_email']);
    }
}

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="contact_info_container">
    <div class="container">
        <div class="row">

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact_form">

                    <?php
                    include ('modules/xu_ly/config/config.php');
                    $sql="select * from quan_ly_dien_dan";
                    $run=mysqli_query($conn,$sql);
                    ?>

                    <div class="contact_info_title">Hỏi Đáp</div><br>
<!--                    câu hỏi-->
<!--                    <table border="0">-->
                        <?php
                        while($dong=mysqli_fetch_array($run)){?>
                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                <div class="comment_image"><div><img src="" alt=""></div></div>
                                <div class="comment_content">
                                    <p>Câu hỏi</p>
                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="comment_author"><a href="#"><?php echo $dong['nguoi_hoi_dien_dan'];?></a></div>
                                        <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                    </div>
                                    <div class="comment_text">
                                        <p>Câu hỏi: <?php echo $dong['cau_hoi_dien_dan'];?></p>
                                        <?php if(isset($_SESSION['ho_ten_dang_ky'])){
                                            if($_SESSION['ho_ten_dang_ky']!=$dong['nguoi_hoi_dien_dan']){?>
                                                <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                    <div class="comment_extra comment_reply"><button onclick="document.getElementById('id03').style.display='block'" style=" font-size: 13px;" class="tra_loi" id="<?php echo $dong['cau_hoi_dien_dan'];?>">Trả Lời</button></div>
                                                </div>
                                            <?php }
                                        }else{
                                            echo '<a href="index.php" style="color: blue;"><strong>Trả lời</strong></a>';
                                            $_SESSION['dang_nhap_dien_dan']='dien dan';
                                        }?>
<!--                                        trả lời-->
                                        <ul style="margin-left: 20px;">
                                            <?php
                                            $cau_hoi_dien_dan=$dong['cau_hoi_dien_dan'];
                                            $sql1="select * from quan_ly_tra_loi_dien_dan where cau_hoi_dien_dan='$cau_hoi_dien_dan'";
                                            $run1=mysqli_query($conn,$sql1);
                                            while($dong1=mysqli_fetch_array($run1)){
                                            if($dong1['tra_loi_dien_dan']!=''){
                                            ?>
                                                <li>
                                                    <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                        <div class="comment_image"><div><img src="" alt=""></div></div>
                                                        <div class="comment_content">
    <!--                                                        <p>Trả lời</p>-->
                                                            <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                                <div class="comment_author"><a href="#"><?php echo $dong1['nguoi_tra_loi_dien_dan'];?></a></div>
                                                                <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                            </div>
    <!--                                                        <div class="comment_text">-->
    <!--                                                            <p style="color: #721c24">Câu hỏi: --><?php //echo $dong['cau_hoi_dien_dan'];?><!--</p>-->
    <!--                                                        </div>-->
                                                            <div class="comment_text">
                                                                <p style="color: green">Trả Lời: <strong><?php echo $dong1['tra_loi_dien_dan'];?></strong></p>
                                                            </div>
                                                        </div>
                                                </li><br>
                                            <?php }}?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<!--                        <tr>-->
<!--                            <td width="30" align="left">Câu hỏi<-/td>-->
<!--                            <td>--><?php //echo $dong['nguoi_hoi_dien_dan'];?><!--</td>-->
<!--                            <td width="300"><p>--><?php //echo $dong['cau_hoi_dien_dan'];?><!--</p>-->
<!--                                <button onclick="document.getElementById('id03').style.display='block'" style="width:12px; height: 12px; font-size: 5px; float: right;" class="tra_loi" id="--><?php //echo $dong['cau_hoi_dien_dan'];?><!--">Trả Lời</button>-->
<!--                            </td>-->

<!--                        </tr>-->
                            <div id="id03" class="modal">

                                <form class="modal-content animate" action="ajax/xu_ly/xu_ly_quan_ly_tra_loi_dien_dan.php" role="form" method="post" enctype="multipart/form-data">
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">x</span>
                                    </div>

                                    <div class="container">
                                        <label for="uname"><h3 style="color: red;">Trả lời</h3></label>
                                        <textarea class="comment_input comment_textarea" required="required" name="cau_tra_loi_dien_dan"></textarea>

                                        <button type="submit" name="tra_loi_dien_dan">Trả Lời</button>
                                    </div>
                                </form>
                            </div>
                        <?php }?>
<!--                    </table>-->


<!--                        event-->

                        <script>
                            $(function(){

                                var therate=1;
                                $('.tra_loi').click(function(){
                                    therate = $(this).attr('id');
                                    var dataRate = 'ch='+therate; //
                                    $.ajax({
                                        type : "POST",
                                        url : "ajax/xu_ly/xu_ly_quan_ly_tra_loi_dien_dan.php",
                                        data: dataRate,
                                    });
                                });

                                // $(document).on('click','.tra_loi',function(){
                                //     alert('U clicked ');
                                // });
                            });

                        </script>



<!--                    trả lời-->

<!--                        --><?php
//                        $sql="select * from quan_ly_tra_loi_dien_dan";
//                        $run=mysqli_query($conn,$sql);
//                        while($dong=mysqli_fetch_array($run)){
//                            if($dong['tra_loi_dien_dan']!=''){
//                            ?>
<!--                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">-->
<!--                                <div class="comment_image"><div><img src="" alt=""></div></div>-->
<!--                                <div class="comment_content">-->
<!--                                    <p>Trả lời</p>-->
<!--                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">-->
<!--                                        <div class="comment_author"><a href="#">--><?php //echo $dong['nguoi_tra_loi_dien_dan'];?><!--</a></div>-->
<!--                                        <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>-->
<!--                                    </div>-->
<!--                                    <div class="comment_text">-->
<!--                                        <p style="color: #721c24">Câu hỏi: --><?php //echo $dong['cau_hoi_dien_dan'];?><!--</p>-->
<!--                                    </div>-->
<!--                                    <div class="comment_text">-->
<!--                                        <p style="color: green">Trả Lời: <strong>--><?php //echo $dong['tra_loi_dien_dan'];?><!--</strong></p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div><br>-->
<!--                        --><?php //}}?>

                    <?php if(isset($_SESSION['ho_ten_dang_ky'])){?>
                        <form class="comment_form" action="ajax/xu_ly/xu_ly_quan_ly_dien_dan.php" role="form" method="post" enctype="multipart/form-data">

                            <div>
                                <div class="form_title">Câu Hỏi</div>
                                <textarea class="comment_input comment_textarea" required="required" name="dat_cau_hoi_dien_dan"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200" name="cau_hoi_dien_dan">Gửi</button>
                            </div>
                        </form>
                    <?php }else{
                        echo '<h3><a href="index.php">Đăng Nhập</a> để đặt câu hỏi</h3>';
                    }?>

                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="contact_info">
                    <div class="contact_info_title">Diễn đàn bảo vệ môi trường</div>
<!--                    <div class="contact_info_text">-->
<!--                        <p>Thông Tin Liên Hệ</p>-->
<!--                    </div>-->
                    <div class="contact_info_location">
                        <img src="images/about_1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>