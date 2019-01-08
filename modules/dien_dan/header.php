
<style>
    /*.dropbtn {*/
        /*background-color: #4CAF50;*/
        /*color: white;*/
        /*padding: 16px;*/
        /*font-size: 16px;*/
        /*border: none;*/
    /*}*/

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<header class="header">

    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                            <li><div class="question">Chào Mừng Bạn Đến Với Website Giáo Dục Môi Trường !
                                    <?php if(isset($_GET['alert'])){?>
                                        <script>alert('Xin vui lòng đăng nhập để bắt đầu hoc !')</script>
                                    <?php }?>
                                    <?php if(isset($_SESSION['dang_ky'])){?>
                                        <?php if($_SESSION['dang_ky']=='thanh_cong'){
                                            $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
                                            echo '<h4 style="margin-left: 750px; margin-bottom: 20px;">Xin Chào:  <a href="chi_tiet_hoc_vien.php" style="color: #c9e2b3">'.$ho_ten_dang_ky.'</a></h4>';
                                            include ('modules/xu_ly/config/config.php');
                                            $ho_ten_dang_ky=$_SESSION['ho_ten_dang_ky'];
                                            $sql1="select * from quan_ly_dang_ky where ho_ten_dang_ky='$ho_ten_dang_ky'";
                                            $run1=mysqli_query($conn,$sql1);
                                            $dong1=mysqli_fetch_array($run1);
                                            $_SESSION['id_dang_ky']=$dong1['id_quan_ly_dk'];

                                        } ?>
                                            <?php if($_SESSION['dang_ky']=='that_bai'){
                                            echo "<script>alert('Tài Khoản Đã Tòn Tại, Xin Đăng ký Lại !')</script>";
                                            session_destroy();
                                            } ?>
                                    <?php } ?>
                                    <?php if(isset($_SESSION['dang_nhap'])){?>
                                        <!--<script>alert('Bạn Đã Đăng Nhập Thành Công !')</script>-->
                                        <h4 style="margin-left: 750px; margin-bottom: 20px;">Xin Chào: <a href="chi_tiet_hoc_vien.php" style="color: #c9e2b3"><?php echo $_SESSION['ho_ten_dang_ky'];?></a></h4>
                                    <?php } ?>
                                </div></li>
<!--                            <li>-->
<!--                            <i class="fa fa-phone" aria-hidden="true"></i>-->
<!--                            <div>001-1234-88888</div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                            <i class="fa fa-envelope-o" aria-hidden="true"></i>-->
<!--                            <div>info.deercreative@gmail.com</div>-->
<!--                            </li>-->
                            </ul>

                            <div class="top_bar_login ml-auto">
<!--                                <div class="login_button"><a href="#">Register or Login</a></div>-->
                                <?php
                                $temp=0;
                                $temp1=0;
                                if(isset($_SESSION['dang_ky'])) {

                                    if($_SESSION['dang_ky']=='thanh_cong'){
                                    echo '<div class="login_button"><a href="ajax/xu_ly/xu_ly_quan_ly_dang_ky.php?destroy=destroy">Đăng Xuất</a></div>';
                                    $temp=1;
                                    }
                                }?>

                                    <?php if(isset($_SESSION['dang_nhap']) && $temp==0){?>
                                    <div class="login_button"><a href="ajax/xu_ly/xu_ly_quan_ly_dang_nhap.php?destroy=destroy">Đăng Xuất</a></div>
                                <?php
                                $temp1=1;
                                    }?>
                                <?php if($temp==0 && $temp1==0){?>
                                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto; margin-bottom: 10px;">Đăng Ký</button>
                                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng Nhập</button>
                                <?php }?>
                                <div id="id02" class="modal1">
                                    <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
                                    <form class="modal-content1" action="ajax/xu_ly/xu_ly_quan_ly_dang_ky.php" role="form" method="post" enctype="multipart/form-data">
                                        <div class="container1">
                                            <h1>Đăng Ký</h1>
                                            <p>Xin điền thông tin để tạo tài khoản.</p>
                                            <hr>
                                            <label for="psw"><b>Họ Tên</b></label>
                                            <input type="text" placeholder="Họ Tên" name="ho_ten_dang_ky" required>

                                            <label for="psw"><b>Tên Tài Khoản</b></label>
                                            <input type="text" placeholder="Tên Tài Khoản" name="ten_tai_khoan_dang_ky" required>

                                            <label for="psw"><b>Mật Khẩu</b></label>
                                            <input type="password" placeholder="Mật Khẩu" name="mat_khau_dang_ky" required>

                                            <label for="psw-repeat"><b>Lập Lại Mật Khẩu</b></label>
                                            <input type="password" placeholder="Lập Lại Mật Khẩu" name="lap_lai_mat_khau_dang_ky" required>

                                            <label for="email"><b>Email</b></label>
                                            <input type="text" placeholder="Email" name="email_dang_ky" required>

                                            <label for="email"><b>Tỉnh</b></label>
                                            <select id="tinh_dang_ky" name="tinh_dang_ky" onchange="populate(this.id,'huyen_dang_ky');" required>
                                                <option> </option>
                                                <option value="Cần Thơ">Cần Thơ</option>
                                                <option value="Hậu Giang">Hậu Giang</option>
                                            </select>

                                            <label for="email"><b>Quận/Huyện </b></label>
                                            <select id="huyen_dang_ky" name="huyen_dang_ky" onchange="populate1(this.id,'truong_dang_ky');" required>

                                            </select>

                                            <label for="email"><b>Trường </b></label>
                                            <select id="truong_dang_ky" name="truong_dang_ky" required>

                                            </select>

                                            <label for="email"><b>Lớp </b></label>
                                            <select id="lop_dang_ky" name="lop_dang_ky" required>
                                                <option> </option>
                                                <option value="1">Lớp 1</option>
                                                <option value="2">Lớp 2</option>
                                                <option value="3">Lớp 3</option>
                                                <option value="4">Lớp 4</option>
                                                <option value="5">Lớp 5</option>
                                            </select>
                                            <!--                                            <label>-->
                                            <!--                                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Lưu Lại-->
                                            <!--                                            </label>-->

                                            <div class="clearfix">
                                                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn1">Thoát</button>
                                                <button type="submit" class="signupbtn" name="dang_ky">Đăng Ký</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

<!--                                login-->

                                <div id="id01" class="modal">

                                    <form class="modal-content animate" action="ajax/xu_ly/xu_ly_quan_ly_dang_nhap.php" role="form" method="post" enctype="multipart/form-data">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                            <img src="images/user_1.png" alt="Avatar" class="avatar">
                                        </div>

                                        <div class="container">
                                            <label for="uname"><b>Tài Khoản</b></label>
                                            <input type="text" placeholder="Tài Khoản" name="tai_khoan_dang_nhap" required>

                                            <label for="psw"><b>Mật Khẩu</b></label>
                                            <input type="password" placeholder="Mật Khẩu" name="mat_khau_dang_nhap" required>

                                            <button type="submit" name="dang_nhap">Đăng Nhập</button>
<!--                                            <label>-->
<!--                                                <input type="checkbox" checked="checked" name="remember"> Lưu Lại-->
<!--                                            </label>-->
                                        </div>

                                        <div class="container" style="background-color:#f1f1f1">
                                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
<!--                                            <span class="psw">Not Password?</span>-->
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="index.php">
                                <div class="logo_text">Giáo Dục <span>Môi Trường</span></div>
                            </a>
                        </div>


                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li><a href="index.php">Trang Chủ</a></li>
                                <li><a href="gioi_thieu.php">Giới Thiệu</a></li>
<!--                                <li><a href="courses.html">Courses</a></li>-->
                                    <div class="dropdown">
                                        <li><a href="#">Khóa Học</a></li>
<!--                                        <button class="dropbtn">Courses</button>-->
                                        <div class="dropdown-content">
                                            <a href="lop_1.php?lop=1">Lớp 1</a>
                                            <a href="lop_2.php?lop=2">Lớp 2</a>
                                            <a href="lop_3.php?lop=3">Lớp 3</a>
                                            <a href="lop_4.php?lop=4">Lớp 4</a>
                                            <a href="lop_5.php?lop=5">Lớp 5</a>
                                        </div>
                                    </div>
                                <li ><a href="dia_chi.php">Địa Chỉ</a></li>
                                <li class="active"><a href="#">Diễn Đàn</a></li>
<!--                                <li><a href="blog.html">Blog</a></li>-->
<!--                                <li><a href="#">Page</a></li>-->
<!--                                <li><a href="contact.html">Contact</a></li>-->
                            </ul>
                            <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <!-- Hamburger -->

                            <!--<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>-->
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Tìm Kiếm" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Cần Thơ"){
            var optionArray = ["|","Cái Răng|Cái Răng","Ninh Kiều|Ninh Kiều"];
        } else if(s1.value == "Hậu Giang"){
            var optionArray = ["|","Phụng Hiệp|Phụng Hiệp","Long Mỹ|Long Mỹ"];
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }

    }

    function populate1(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Cái Răng"){
            var optionArray = ["|","Trường 1A|Trường 1A","Trường 1B|Trường 1B"];
        } else if(s1.value == "Ninh Kiều"){
            var optionArray = ["|","Trường 1C|Trường 1C","Trường 1D|Trường 1D"];
        }else if(s1.value == "Phụng Hiệp"){
            var optionArray = ["|","Trường 1E|Trường 1E","Trường 1F|Trường 1F"];
        }else if(s1.value == "Long Mỹ"){
            var optionArray = ["|","Trường 1G|Trường 1G","Trường 1H|Trường 1H"];
        }

        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }

    }
</script>