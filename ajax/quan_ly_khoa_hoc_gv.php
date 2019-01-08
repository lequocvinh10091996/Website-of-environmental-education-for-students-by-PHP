<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Quản Lý</a></li>
			<li><a href="#">Quản Lý Dữ Liệu</a></li>
			<li><a href="#">Quản Lý Khóa Học</a></li>
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
					<span>Khóa Học</span>
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

            <div class="box-content">
                    <?php if(isset($_GET['sua'])){?>
                        <?php
                        if(isset($_GET['id_khoahoc'])) {
                            session_start();
                            include('xu_ly/config/config.php');
                            $id_khoahoc = $_GET['id_khoahoc'];
                            $sql = "select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
                            $run = mysqli_query($conn, $sql);
                            $dong = mysqli_fetch_array($run);
                        }
                        ?>
                        <h4 class="page-header">Sửa Khóa Học</h4>
                        <form action="ajax/xu_ly/xu_ly_quan_ly_khoa_hoc_gv.php?id_khoahoc=<?php echo $dong['id_quan_ly_kh'];?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Hình Ảnh Khóa Học</label>
                                <div class="col-sm-4">
                                    <input type="file" name="hinh_anh_khoa_hoc" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Tên Khóa Học</label>
                                <div class="col-sm-4">
                                    <input type="text" name="ten_khoa_hoc" class="form-control" placeholder="Tên Khóa Học" value="<?php echo $dong['ten_khoa_hoc'];?>">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Giá</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Giá Khóa Học" name="gia_khoa_hoc" value="<?php echo $dong['gia_khoa_hoc'];?>" >
                                </div>
                                <label>
                                    Nghìn VNĐ
                                </label>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Thời Lượng</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" placeholder="Thời Lượng Khóa Học" name="thoi_luong_khoa_hoc" value="<?php echo $dong['thoi_luong_khoa_hoc'];?>">
                                </div>
                                <label>
                                    Ngày
                                </label>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Số Bài Giảng</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" placeholder="Bài Giảng Khóa Học" name="bai_giang_khoa_hoc" value="<?php echo $dong['bai_giang_khoa_hoc'];?>">
                                </div>
                                <label>
                                    Bài Giảng
                                </label>
                            </div>
                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-2 control-label">Loại Khóa Học</label>
                                <div class="col-sm-4">
                                    <select id="s2_with_tag_1" name="loai_khoa_hoc" multiple="multiple" class="populate placeholder">
                                        <option value="<?php echo $dong['loai_khoa_hoc'];?>" selected><?php echo $dong['loai_khoa_hoc'];?></option>
                                        <option value="Hình Ảnh">Hình Ảnh</option>
                                        <option value="Video">Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-2 control-label">Lớp Của Khóa Học</label>
                                <div class="col-sm-4">
                                    <select id="s2_with_tag" name="lop_khoa_hoc" multiple="multiple" class="populate placeholder">
                                        <option value="<?php echo $dong['lop_khoa_hoc'];?>" selected>Lớp <?php echo $dong['lop_khoa_hoc'];?></option>
                                        <option value="1">Lớp 1</option>
                                        <option value="2">Lớp 2</option>
                                        <option value="3">Lớp 3</option>
                                        <option value="4">Lớp 4</option>
                                        <option value="5">Lớp 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="form-styles">Mô Tả Ngắn Khóa Học</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="wysiwig_simple" name="mo_ta_ngan_khoa_hoc"><?php echo $dong['mo_ta_ngan_khoa_hoc'];?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="form-styles">Mô Tả Chi Tiết Khóa Học</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="wysiwig_full" name="mo_ta_chi_tiet_khoa_hoc"><?php echo $dong['mo_ta_chi_tiet_khoa_hoc'];?></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-label-left" name="sua_quan_Ly_khoa_hoc">
                                        <span><i class="fa fa-clock-o"></i></span>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php }else{?>
                    <h4 class="page-header">Thêm Khóa Học</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_khoa_hoc.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hình Ảnh Khóa Học</label>
                            <div class="col-sm-4">
                                <input type="file" name="hinh_anh_khoa_hoc" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Tên Khóa Học</label>
                            <div class="col-sm-4">
                                <input type="text" name="ten_khoa_hoc" class="form-control" placeholder="Tên Khóa Học">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Giá</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Giá Khóa Học" name="gia_khoa_hoc">
                            </div>
                            <label>
                                Nghìn VNĐ
                            </label>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Thời Lượng</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Thời Lượng Khóa Học" name="thoi_luong_khoa_hoc">
                            </div>
                            <label>
                                Ngày
                            </label>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Số Bài Giảng</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Bài Giảng Khóa Học" name="bai_giang_khoa_hoc">
                            </div>
                            <label>
                                Bài Giảng
                            </label>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Loại Khóa Học</label>
                            <div class="col-sm-4">
                                <select id="s2_with_tag_1" name="loai_khoa_hoc" multiple="multiple" class="populate placeholder">
                                    <option value="Hình Ảnh">Hình Ảnh</option>
                                    <option value="Video">Video</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Lớp Của Khóa Học</label>
                            <div class="col-sm-4">
                                <select id="s2_with_tag" name="lop_khoa_hoc" multiple="multiple" class="populate placeholder">
                                    <option value="1">Lớp 1</option>
                                    <option value="2">Lớp 2</option>
                                    <option value="3">Lớp 3</option>
                                    <option value="4">Lớp 4</option>
                                    <option value="5">Lớp 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Mô Tả Ngắn Khóa Học</label>
                            <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="wysiwig_simple" name="mo_ta_ngan_khoa_hoc"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Mô Tả Chi Tiết Khóa Học</label>
                            <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="wysiwig_full" name="mo_ta_chi_tiet_khoa_hoc"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="quan_Ly_khoa_hoc">
                                <span><i class="fa fa-clock-o"></i></span>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                <?php }?>
			</div>
		</div>
	</div>
</div>
<!--<div class="row">-->
	<!--<div class="col-xs-12 col-sm-8">-->
		<!--<div class="box">-->
			<!--<div class="box-header">-->
				<!--<div class="box-name">-->
					<!--<i class="fa fa-search"></i>-->
					<!--<span>Validator forms</span>-->
				<!--</div>-->
				<!--<div class="box-icons">-->
					<!--<a class="collapse-link">-->
						<!--<i class="fa fa-chevron-up"></i>-->
					<!--</a>-->
					<!--<a class="expand-link">-->
						<!--<i class="fa fa-expand"></i>-->
					<!--</a>-->
					<!--<a class="close-link">-->
						<!--<i class="fa fa-times"></i>-->
					<!--</a>-->
				<!--</div>-->
				<!--<div class="no-move"></div>-->
			<!--</div>-->
			<!--<div class="box-content">-->
				<!--<form id="defaultForm" method="post" action="validators.html" class="form-horizontal">-->
					<!--<fieldset>-->
						<!--<legend>Not Empty validator</legend>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Username</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="text" class="form-control" name="username" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Country</label>-->
							<!--<div class="col-sm-5">-->
								<!--<select class="populate placeholder" name="country" id="s2_country">-->
									<!--<option value="">&#45;&#45; Select a country &#45;&#45;</option>-->
									<!--<option value="fr">France</option>-->
									<!--<option value="de">Germany</option>-->
									<!--<option value="it">Italy</option>-->
									<!--<option value="jp">Japan</option>-->
									<!--<option value="ru">Russia</option>-->
									<!--<option value="gb">United Kingdom</option>-->
									<!--<option value="us">United State</option>-->
								<!--</select>-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<div class="col-sm-9 col-sm-offset-3">-->
								<!--<div class="checkbox">-->
									<!--<label>-->
										<!--<input type="checkbox"  name="acceptTerms" /> Accept the terms and policies-->
										<!--<i class="fa fa-square-o small"></i>-->
									<!--</label>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
					<!--</fieldset>-->
					<!--<fieldset>-->
						<!--<legend>Regular expression based validators</legend>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Email address</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="text" class="form-control" name="email" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Website</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="text" class="form-control" name="website" placeholder="http://" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Phone number</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="text" class="form-control" name="phoneNumber" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Hex color</label>-->
							<!--<div class="col-sm-3">-->
								<!--<input type="text" class="form-control" name="color" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">US zip code</label>-->
							<!--<div class="col-sm-3">-->
								<!--<input type="text" class="form-control" name="zipCode" />-->
							<!--</div>-->
						<!--</div>-->
					<!--</fieldset>-->
					<!--<fieldset>-->
						<!--<legend>Identical validator</legend>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Password</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="password" class="form-control" name="password" />-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Retype password</label>-->
							<!--<div class="col-sm-5">-->
								<!--<input type="password" class="form-control" name="confirmPassword" />-->
							<!--</div>-->
						<!--</div>-->
					<!--</fieldset>-->
					<!--<fieldset>-->
						<!--<legend>Other validators</legend>-->
						<!--<div class="form-group">-->
							<!--<label class="col-sm-3 control-label">Ages</label>-->
							<!--<div class="col-sm-3">-->
								<!--<input type="text" class="form-control" name="ages" />-->
							<!--</div>-->
						<!--</div>-->
					<!--</fieldset>-->
					<!--<div class="form-group">-->
						<!--<div class="col-sm-9 col-sm-offset-3">-->
							<!--<button type="submit" class="btn btn-primary">Submit</button>-->
						<!--</div>-->
					<!--</div>-->
				<!--</form>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
	<!--<div class="col-xs-12 col-sm-4">-->
		<!--<div class="box">-->
			<!--<div class="box-header">-->
				<!--<div class="box-name">-->
					<!--<i class="fa fa-search"></i>-->
					<!--<span>Contextual backgrounds</span>-->
				<!--</div>-->
				<!--<div class="box-icons">-->
					<!--<a class="collapse-link">-->
						<!--<i class="fa fa-chevron-up"></i>-->
					<!--</a>-->
					<!--<a class="expand-link">-->
						<!--<i class="fa fa-expand"></i>-->
					<!--</a>-->
					<!--<a class="close-link">-->
						<!--<i class="fa fa-times"></i>-->
					<!--</a>-->
				<!--</div>-->
				<!--<div class="no-move"></div>-->
			<!--</div>-->
			<!--<div class="box-content">-->
				<!--<p class="bg-primary">Simple info</p>-->
				<!--<p class="bg-success">Message success</p>-->
				<!--<p class="bg-info">Message info</p>-->
				<!--<p class="bg-warning">Message warning</p>-->
				<!--<p class="bg-danger">Message danger</p>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
<!--</div>-->
<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Chọn Lớp"});
    $('#s2_with_tag_1').select2({placeholder: "Chọn Loại Khóa Học"});
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
