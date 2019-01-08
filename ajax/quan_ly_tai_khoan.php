<!--<script src='tinymce/tinymce/tinymce.min.js'></script>-->
<!--<script>-->
<!--    tinymce.init({-->
<!--        selector: '#noi_dung_bai_hoc',-->
<!--        height: 500,-->
<!--        theme: 'modern',-->
<!--        plugins: [-->
<!--            'advlist autolink lists link image charmap print preview hr anchor pagebreak',-->
<!--            'searchreplace wordcount visualblocks visualchars code fullscreen',-->
<!--            'insertdatetime media nonbreaking save table contextmenu directionality',-->
<!--            'emoticons template paste textcolor colorpicker textpattern imagetools'-->
<!--        ],-->
<!--        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',-->
<!--        toolbar2: 'print preview media | forecolor backcolor emoticons',-->
<!--        image_advtab: true-->
<!--    });-->
<!--</script>-->
<?php
session_start();
if(isset($_SESSION['tao_tai_khoan'])){
    echo '<script>alert("Đăng ký tài khoản thất bại !")</script>';
    unset($_SESSION['tao_tai_khoan']);
}
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Quản Lý</a></li>
			<li><a href="#">Quản Lý Dữ Liệu</a></li>
			<li><a href="#">Quản Lý Tài Khoản</a></li>
		</ol>
		<!--<div id="social" class="pull-right">-->
			<!--<a href="#"><i class="fa fa-google-plus"></i></a>-->
			<!--<a href="#"><i class="fa fa-facebook"></i></a>-->
			<!--<a href="#"><i class="fa fa-twitter"></i></a>-->
			<!--<a href="#"><i class="fa fa-linkedin"></i></a>-->
			<!--<a href="#"><i class="fa fa-youtube"></i></a>-->
		<!--</div>-->
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Tài Khoản</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
            <?php if(isset($_GET['sua'])){?>
                <?php
                if(isset($_GET['id_taikhoan'])) {
                    session_start();
                    include('xu_ly/config/config.php');
                    $id_taikhoan = $_GET['id_taikhoan'];
                    $sql = "select * from quan_ly_tai_khoan where id_quan_ly_tk='$id_taikhoan'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                }
                ?>
                <div class="box-content">
                    <h4 class="page-header">Sửa Tài Khoản</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_tai_khoan.php?id_taikhoan=<?php echo $dong['id_quan_ly_tk']; ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Họ Tên Người Dùng</h4></label>
                                <div class="col-sm-4">
                                    <input type="text" name="ho_ten_nguoi_dung" class="form-control" placeholder="ho_ten_nguoi_dung" value="<?php echo $dong['ho_ten_nguoi_dung']?>">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Tài Khoản</h4></label>
                                <!--                                <label class="col-sm-2 control-label"><h4>--><?php //echo $dong['id_quan_ly_kh']; ?><!--</h4></label>-->
                                <div class="col-sm-4">
                                    <input type="text" name="tai_khoan_nguoi_dung" class="form-control" placeholder="tai_khoan_nguoi_dung" value="<?php echo $dong['tai_khoan_nguoi_dung']?>">
                                </div>
                            </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Mật Khẩu</h4></label>
                            <!--                                <label class="col-sm-2 control-label"><h4>--><?php //echo $dong['id_quan_ly_kh']; ?><!--</h4></label>-->
                            <div class="col-sm-4">
                                <input type="text" name="mat_khau_nguoi_dung" class="form-control" placeholder="mat_khau_nguoi_dung" value="<?php echo $dong['mat_khau_nguoi_dung']?>">
                            </div>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Loại Tài Khoản</label>
                            <div class="col-sm-4">
                                <select id="s2_with_tag" name="loai_tai_khoan" multiple="multiple" class="populate placeholder">
                                    <?php if($dong['loai_tai_khoan']=='gv'){?>
                                        <option selected value="<?php echo $dong['loai_tai_khoan']?>">Giáo Viên</option>
                                    <?php }?>
                                    <?php if($dong['loai_tai_khoan']=='ql'){?>
                                        <option selected value="<?php echo $dong['loai_tai_khoan']?>">Quản Lý</option>
                                    <?php }?>
                                    <option value="gv">Giáo Viên</option>
                                    <option value="ql">Quản Lý</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="sua_quan_ly_tai_khoan">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php }else{?>
                <div class="box-content">
                    <h4 class="page-header">Thêm Tài Khoản</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_tai_khoan.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Họ Tên</h4></label>
                            <div class="col-sm-4">
                                <input type="text" name="ho_ten_nguoi_dung" class="form-control" placeholder="Họ Tên">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Tài Khoản</h4></label>
                            <!--                                <label class="col-sm-2 control-label"><h4>--><?php //echo $dong['id_quan_ly_kh']; ?><!--</h4></label>-->
                            <div class="col-sm-4">
                                <input type="text" name="tai_khoan_nguoi_dung" class="form-control" placeholder="Tài Khoản" >
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Mật Khẩu</h4></label>
                            <!--                                <label class="col-sm-2 control-label"><h4>--><?php //echo $dong['id_quan_ly_kh']; ?><!--</h4></label>-->
                            <div class="col-sm-4">
                                <input type="text" name="mat_khau_nguoi_dung" class="form-control" placeholder="Mật Khẩu" >
                            </div>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Loại Tài Khoản</label>
                            <div class="col-sm-4">
                                <select id="s2_with_tag" name="loai_tai_khoan" multiple="multiple" class="populate placeholder">
                                    <option value="gv">Giáo Viên</option>
                                    <option value="ql">Quản Lý</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="quan_ly_tai_khoan">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php }?>
		</div>
	</div>
</div>

<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Loại Tài Khoản"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
