<?php
include ('modules/xu_ly/config/config.php');
$id_baihoc=$_GET['id_baihoc'];
$sql="select * from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
$run=mysqli_query($conn,$sql);
?>
<div class="blog_content">
    <?php
    while($dong=mysqli_fetch_array($run)){
    ?>
    <div class="blog_title"><?php echo $dong['ten_bai_hoc']; ?></div>
    <div class="blog_meta">
<!--        <ul>-->
<!--            <li>Post on <a href="#">May 5, 2018</a></li>-->
<!--            <li>By <a href="#">admin</a></li>-->
<!--        </ul>-->
    </div>
    <div class="blog_image"><img src="ajax/xu_ly/uploads/lop_<?php echo $dong['lop_khoa_hoc'];?>/<?php echo $dong['hinh_anh_bai_hoc']; ?>" alt=""></div>
<!--    <p>--><?php //echo $dong['mo_ta_ngan_bai_hoc']; ?><!--</p>-->
    <div class="blog_quote d-flex flex-row align-items-center justify-content-start">
        <i class="fa fa-quote-left" aria-hidden="true"></i>
        <div>“Giáo dục môi trường là một quá trình thông qua các hoạt động giáo dục chính quy và không chính quy nhằm giúp con người có được sự hiểu biết.”</div>
    </div>
    <p>Mục đích của Giáo dục môi trường nhằm vận dụng những kiến thức và kỹ năng vào gìn giữ, bảo tồn, sử dụng môi trường theo cách thức bền vững cho cả thế hệ hiện tại và tương lai. Nó cũng bao hàm cả việc học tập cách sử dụng những công nghệ mới nhằm tăng sản lượng và tránh những thảm hoạ môi trường, xoá nghèo đói, tận dụng các cơ hội và đưa ra những quyết định khôn khéo trong sử dụng tài nguyên. Hơn nữa, nó bao hàm cả việc đạt được những kỹ năng, có những động lực và cam kết hành động.</p>
        <p>Mục đích của Giáo dục môi trường nhằm vận dụng những kiến thức và kỹ năng vào gìn giữ, bảo tồn, sử dụng môi trường theo cách thức bền vững cho cả thế hệ hiện tại và tương lai. Nó cũng bao hàm cả việc học tập cách sử dụng những công nghệ mới nhằm tăng sản lượng và tránh những thảm hoạ môi trường, xoá nghèo đói, tận dụng các cơ hội và đưa ra những quyết định khôn khéo trong sử dụng tài nguyên. Hơn nữa, nó bao hàm cả việc đạt được những kỹ năng, có những động lực và cam kết hành động.</p>
    <div class="blog_subtitle">Nội Dung Bài Học</div>

    <p><?php echo $dong['noi_dung_bai_hoc']; ?></p>
<!--    <p>I followed up with for the video told me that being sexual with an Antioch student is different from being sexual with someone else. They spoke of a common language everyone is taught beginning at orientation, so that when one student starts asking questions of another student in the midst of sexual activity, it doesn’t seem so out there.</p>-->
<!--    <div class="blog_images">-->
<!--        <div class="row">-->
<!---->
<!--        </div>-->
<!--    </div>-->
        <?php
    }
    ?>
    <div class="blog_subtitle">Phần Kết</div>
    <p>- Bạn phải hoàn thành bài kiểm tra cuối bài để học bài kế tiếp</p>
    <p>- Chú ý: Bạn phải làm chính xác những câu hỏi mới hoàn thành bài kiểm tra cuối bài, nếu không hoàn thành thì phải làm lại.</p>
    <p>Bạn chọn vào "Kiểm Tra" để làm bài kiểm tra: <a href="quiz/index_bai_kiem_tra.php?id_baihoc=<?php echo $id_baihoc;?>">Kiểm Tra</a></p>
</div>