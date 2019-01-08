<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Quản Lý</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../plugins_manager/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="../css/style_v1.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
<!--			<div class="text-right">-->
<!--				<a href="page_register_v1.html" class="txt-default">Need an account?</a>-->
<!--			</div>-->
            <?php if(isset($_SESSION['sai_tai_khoan'])){?>
                <?php echo '<script>alert("Nhập sai tài khoản !");</script>'; ?>
            <?php }
            unset($_SESSION['dang_nhap_quan_ly']);
            unset($_SESSION['ho_ten_quan_ly']);
            ?>
            <form action="xu_ly/xu_ly_quan_ly_dang_nhap_ql.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                <div class="box">
                    <div class="box-content">
                        <div class="text-center">
                            <h3 class="page-header">Đăng Nhập Quản Lý</h3>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tài Khoản</label>
                            <input type="text" class="form-control" name="tai_khoan_quan_ly" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mật Khẩu</label>
                            <input type="password" class="form-control" name="mat_khau_quan_ly" required/>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-label-left" name="dang_nhap_quan_ly">
                                <span><i class="fa fa-clock-o"></i></span>
                                Đăng Nhập
                            </button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>
</body>
</html>
