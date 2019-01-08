<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Quản Lý</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins_manager/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins_manager/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins_manager/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins_manager/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins_manager/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins_manager/select2/select2.css" rel="stylesheet">
		<link href="plugins_manager/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v1.css" rel="stylesheet">
		<link href="plugins_manager/chartist/chartist.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<!--Start Header-->
<?php if(isset($_SESSION['dang_nhap_quan_ly'])){?>
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index_v1_gv.php">Giáo Viên</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
<!--							<input type="text" placeholder="search"/>-->
<!--							<i class="fa fa-search"></i>-->
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
<!--						<a href="#" class="about">about</a>-->
<!--						<a href="index.html" class="style2"></a>-->
						<ul class="nav navbar-nav pull-right panel-menu">
							<!--<li class="hidden-xs">-->
								<!--<a href="index.html" class="modal-link">-->
									<!--<i class="fa fa-bell"></i>-->
									<!--<span class="badge">7</span>-->
								<!--</a>-->
							<!--</li>-->
							<!--<li class="hidden-xs">-->
								<!--<a class="ajax-link" href="ajax/calendar.html">-->
									<!--<i class="fa fa-calendar"></i>-->
									<!--<span class="badge">7</span>-->
								<!--</a>-->
							<!--</li>-->
							<!--<li class="hidden-xs">-->
								<!--<a href="ajax/page_messages.html" class="ajax-link">-->
									<!--<i class="fa fa-envelope"></i>-->
									<!--<span class="badge">7</span>-->
								<!--</a>-->
							<!--</li>-->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/avatar_1.png" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Xin Chào,</span>
										<span><?php echo $_SESSION['ho_ten_quan_ly'];?></span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<!--<li>-->
										<!--<a href="#">-->
											<!--<i class="fa fa-user"></i>-->
											<!--<span>Profile</span>-->
										<!--</a>-->
									<!--</li>-->
									<!--<li>-->
										<!--<a href="ajax/page_messages.html" class="ajax-link">-->
											<!--<i class="fa fa-envelope"></i>-->
											<!--<span>Messages</span>-->
										<!--</a>-->
									<!--</li>-->
									<!--<li>-->
										<!--<a href="ajax/gallery_simple.html" class="ajax-link">-->
											<!--<i class="fa fa-picture-o"></i>-->
											<!--<span>Albums</span>-->
										<!--</a>-->
									<!--</li>-->
									<!--<li>-->
										<!--<a href="ajax/calendar.html" class="ajax-link">-->
											<!--<i class="fa fa-tasks"></i>-->
											<!--<span>Tasks</span>-->
										<!--</a>-->
									<!--</li>-->
									<!--<li>-->
										<!--<a href="#">-->
											<!--<i class="fa fa-cog"></i>-->
											<!--<span>Settings</span>-->
										<!--</a>-->
									<!--</li>-->
									<li>
										<a href="ajax/dang_nhap.php">
											<i class="fa fa-power-off"></i>
											<span>Đăng Xuất</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
<!--				<li>-->
<!--					<a href="ajax/doanh_so.php" class="ajax-link">-->
<!--						<i class="fa fa-dashboard"></i>-->
<!--						<span class="hidden-xs">Quản Lý</span>-->
<!--					</a>-->
<!--				</li>-->
				<!--<li class="dropdown">-->
					<!--<a href="#" class="dropdown-toggle">-->
						<!--<i class="fa fa-bar-chart-o"></i>-->
						<!--<span class="hidden-xs">Charts</span>-->
					<!--</a>-->
					<!--<ul class="dropdown-menu">-->
						<!--<li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_amcharts.html">AmCharts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_chartist.html">Chartist</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>-->
					<!--</ul>-->
				<!--</li>-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Bảng</span>
					</a>
					<ul class="dropdown-menu">
						<!--<li><a class="ajax-link" href="ajax/tables_simple.html">Simple Tables</a></li>-->
                        <li><a class="ajax-link" href="ajax/bang_nhung_khoa_hoc_gv.php">Bảng Các Khóa Học</a></li>
                        <li><a class="ajax-link" href="ajax/bang_nhung_bai_hoc_gv.php">Bảng Các Bài Học</a></li>
                        <!--<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>-->
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Quản Lý Dữ Liệu</span>
					</a>
					<ul class="dropdown-menu">
						<!--<li><a class="ajax-link" href="ajax/forms_elements.html">Elements</a></li>-->
<!--						<li><a class="ajax-link" href="ajax/quan_ly_khoa_hoc.php">Quản Lý Khóa Học</a></li>-->
<!--                        <li><a class="ajax-link" href="ajax/quan_ly_bai_hoc.php">Quản Lý Bài Học</a></li>-->
<!--                        <li><a class="ajax-link" href="ajax/quan_ly_giao_vien.php">Quản Lý Giáo Viên</a></li>-->
                        <li><a class="ajax-link" href="ajax/bang_nhung_giao_vien_gv.php">Thông Tin Bản Thân</a></li>
<!--                        <li><a class="ajax-link" href="ajax/quan_ly_bai_thi_cuoi_bai.php">Quản Lý Bài Thi Cuối Bài</a></li>-->
<!--                        <li><a class="ajax-link" href="ajax/quan_ly_tai_khoan.php">Quản Lý Tài Khoản</a></li>-->
<!--						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>-->
					</ul>
				</li>
				<!--<li class="dropdown">-->
					<!--<a href="#" class="dropdown-toggle">-->
						<!--<i class="fa fa-desktop"></i>-->
						 <!--<span class="hidden-xs">UI Elements</span>-->
					<!--</a>-->
					<!--<ul class="dropdown-menu">-->
						<!--<li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>-->
					<!--</ul>-->
				<!--</li>-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Trạng Thái</span>
					</a>
					<ul class="dropdown-menu">
                        <li><a class="ajax-link" href="ajax/bang_nhung_nguoi_dang_ky_khoa_hoc_gv.php">Người Đăng Ký Khóa Học</a></li>
                        <li><a class="ajax-link" href="ajax/bang_nhung_trang_thai_bai_kiem_tra_cuoi_khoa_gv.php">Trạng Thái Kiểm Tra Khóa</a></li>
<!--						<li><a href="ajax/page_login_v1.html">Login</a></li>-->
						<!--<li><a href="ajax/page_register_v1.html">Register</a></li>-->
						<!--<li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>-->
						<!--<li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>-->
<!--						<li><a class="ajax-link" href="ajax/page_product.html">Những Khóa Học</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>-->
						<!--<li><a href="ajax/page_500_v1.html">Error 500</a></li>-->
					</ul>
				</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fas fa-book"></i>
                        <span class="hidden-xs">Quản Lý Kiểm Tra</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="ajax-link" href="ajax/bang_nhung_kiem_tra_bai_hoc_gv.php">Bài Kiểm Tra Bài Học</a></li>
                        <li><a class="ajax-link" href="ajax/bang_nhung_kiem_tra_khoa_hoc_gv.php">Bài Kiểm Tra Khóa Học</a></li>
                        <!--<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>-->
                    </ul>
                </li>
<!--				<li class="dropdown">-->
<!--					<a href="#" class="dropdown-toggle">-->
<!--						<i class="fa fa-picture-o"></i>-->
<!--						 <span class="hidden-xs">Hình Ảnh</span>-->
<!--					</a>-->
<!--					<ul class="dropdown-menu">-->
<!--						<li><a class="ajax-link" href="ajax/gallery_simple.html">Hình Ảnh Những Khóa Học</a></li>-->
						<!--<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>-->
<!--					</ul>-->
<!--				</li>-->
				<!--<li>-->
					 <!--<a class="ajax-link" href="ajax/typography.html">-->
						 <!--<i class="fa fa-font"></i>-->
						 <!--<span class="hidden-xs">Typography</span>-->
					<!--</a>-->
				<!--</li>-->
				 <!--<li>-->
					<!--<a class="ajax-link" href="ajax/calendar.html">-->
						 <!--<i class="fa fa-calendar"></i>-->
						 <!--<span class="hidden-xs">Calendar</span>-->
					<!--</a>-->
				 <!--</li>-->
				<!--<li class="dropdown">-->
					<!--<a href="#" class="dropdown-toggle">-->
						<!--<i class="fa fa-picture-o"></i>-->
						 <!--<span class="hidden-xs">Multilevel menu</span>-->
					<!--</a>-->
					<!--<ul class="dropdown-menu">-->
						<!--<li><a href="#">First level menu</a></li>-->
						<!--<li><a href="#">First level menu</a></li>-->
						<!--<li class="dropdown">-->
							<!--<a href="#" class="dropdown-toggle">-->
								<!--<i class="fa fa-plus-square"></i>-->
								<!--<span class="hidden-xs">Second level menu group</span>-->
							<!--</a>-->
							<!--<ul class="dropdown-menu">-->
								<!--<li><a href="#">Second level menu</a></li>-->
								<!--<li><a href="#">Second level menu</a></li>-->
								<!--<li class="dropdown">-->
									<!--<a href="#" class="dropdown-toggle">-->
										<!--<i class="fa fa-plus-square"></i>-->
										<!--<span class="hidden-xs">Three level menu group</span>-->
									<!--</a>-->
									<!--<ul class="dropdown-menu">-->
										<!--<li><a href="#">Three level menu</a></li>-->
										<!--<li><a href="#">Three level menu</a></li>-->
										<!--<li class="dropdown">-->
											<!--<a href="#" class="dropdown-toggle">-->
												<!--<i class="fa fa-plus-square"></i>-->
												<!--<span class="hidden-xs">Four level menu group</span>-->
											<!--</a>-->
											<!--<ul class="dropdown-menu">-->
												<!--<li><a href="#">Four level menu</a></li>-->
												<!--<li><a href="#">Four level menu</a></li>-->
												<!--<li class="dropdown">-->
													<!--<a href="#" class="dropdown-toggle">-->
														<!--<i class="fa fa-plus-square"></i>-->
														<!--<span class="hidden-xs">Five level menu group</span>-->
													<!--</a>-->
													<!--<ul class="dropdown-menu">-->
														<!--<li><a href="#">Five level menu</a></li>-->
														<!--<li><a href="#">Five level menu</a></li>-->
														<!--<li class="dropdown">-->
															<!--<a href="#" class="dropdown-toggle">-->
																<!--<i class="fa fa-plus-square"></i>-->
																<!--<span class="hidden-xs">Six level menu group</span>-->
															<!--</a>-->
															<!--<ul class="dropdown-menu">-->
																<!--<li><a href="#">Six level menu</a></li>-->
																<!--<li><a href="#">Six level menu</a></li>-->
															<!--</ul>-->
														<!--</li>-->
													<!--</ul>-->
												<!--</li>-->
											<!--</ul>-->
										<!--</li>-->
										<!--<li><a href="#">Three level menu</a></li>-->
									<!--</ul>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</li>-->
					<!--</ul>-->
				<!--</li>-->
			<!--</ul>-->
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="about">
				<div class="about-inner">
					<h4 class="page-header">Open-source admin theme for you</h4>
					<p>DevOOPS team</p>
					<p>Homepage - <a href="http://devoops.me" target="_blank">http://devoops.me</a></p>
					<p>Email - <a href="mailto:devoopsme@gmail.com">devoopsme@gmail.com</a></p>
					<p>Twitter - <a href="http://twitter.com/devoopsme" target="_blank">http://twitter.com/devoopsme</a></p>
					<p>Donate - BTC 123Ci1ZFK5V7gyLsyVU36yPNWSB5TDqKn3</p>
				</div>
			</div>
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins_manager/jquery/jquery.min.js"></script>
<script src="plugins_manager/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins_manager/bootstrap/bootstrap.min.js"></script>
<script src="plugins_manager/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins_manager/tinymce/tinymce.min.js"></script>
<script src="plugins_manager/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js_manager/devoops_2.js"></script>
<?php }else{?>
    <?php header('location:ajax/dang_nhap.php');?>
<?php }?>
</body>
</html>
