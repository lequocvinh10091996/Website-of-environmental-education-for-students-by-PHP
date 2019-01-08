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

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Quản Lý</a></li>
			<li><a href="#">Quản Lý Dữ Liệu</a></li>
			<li><a href="#">Quản Lý Bài Học</a></li>
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
					<span>Bài Học</span>
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
                if(isset($_GET['id_baihoc'])) {
                    session_start();
                    include('xu_ly/config/config.php');
                    $id_baihoc = $_GET['id_baihoc'];
                    $sql = "select * from quan_ly_bai_hoc where id_quan_ly_bh='$id_baihoc'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                }
                ?>
                <div class="box-content">
                    <h4 class="page-header">Sửa Bài Học</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_bai_hoc.php?id_baihoc=<?php echo $dong['id_quan_ly_bh']; ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Mã Khóa Học</h4></label>
<!--                                <label class="col-sm-2 control-label"><h4>--><?php //echo $dong['id_quan_ly_kh']; ?><!--</h4></label>-->
                                <div class="col-sm-4">
                                    <input type="text" name="ma_khoa_hoc" class="form-control" placeholder="Mã Khóa Học" value="<?php echo $dong['id_quan_ly_kh']?>">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Tên Khóa Học</h4></label>
                                <div class="col-sm-4">
                                    <input type="text" name="ten_khoa_hoc" class="form-control" placeholder="Tên Khóa Học" value="<?php echo $dong['ten_khoa_hoc']?>">
                                </div>
                            </div>
                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-2 control-label">Lớp Của Khóa Học</label>
                                <div class="col-sm-4">
                                    <select id="s2_with_tag" name="lop_khoa_hoc" multiple="multiple" class="populate placeholder">
                                        <option selected value="<?php echo $dong['lop_khoa_hoc']?>">Lớp <?php echo $dong['lop_khoa_hoc']?></option>
                                        <option value="1">Lớp 1</option>
                                        <option value="2">Lớp 2</option>
                                        <option value="3">Lớp 3</option>
                                        <option value="4">Lớp 4</option>
                                        <option value="5">Lớp 5</option>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hình Ảnh Bài Học</label>
                            <div class="col-sm-4">
                                <input type="file" name="hinh_anh_bai_hoc" class="form-control" placeholder="First name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Tên Bài Học</label>
                            <div class="col-sm-4">
                                <input type="text" name="ten_bai_hoc" class="form-control" placeholder="Tên Khóa Học" value="<?php echo $dong['ten_bai_hoc']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Mô Tả Ngắn Bài Học</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_simple" name="mo_ta_ngan_bai_hoc"><?php echo $dong['mo_ta_ngan_bai_hoc']?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Nôi Dung Bài Học</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full" name="noi_dung_bai_hoc"><?php echo $dong['noi_dung_bai_hoc']?></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="sua_bai_hoc">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php }else{?>
                <?php
                if(isset($_GET['id_khoahoc'])) {
                    session_start();
                    include('xu_ly/config/config.php');
                    $id_khoahoc = $_GET['id_khoahoc'];
                    $sql = "select * from quan_ly_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                    $_SESSION['id_khoahoc'] = $id_khoahoc;
                    $_SESSION['ten_khoa_hoc'] = $dong['ten_khoa_hoc'];
                    $_SESSION['lop_khoa_hoc'] = $dong['lop_khoa_hoc'];
                }
                ?>
                <div class="box-content">
                    <h4 class="page-header">Thêm Bài Học</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_bai_hoc.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <?php if(isset($_GET['id_khoahoc'])){ ?>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Mã Khóa Học</h4></label> <label class="col-sm-2 control-label"><h4><?php echo $dong['id_quan_ly_kh']; ?></h4></label>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Tên Khóa Học</h4></label> <label class="col-sm-2 control-label"><h4><?php echo $dong['ten_khoa_hoc']; ?></h4></label>
                            </div>
                        <?php }else{?>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Mã Khóa Học</h4></label>
                                <div class="col-sm-4">
                                    <input type="text" name="ma_khoa_hoc" class="form-control" placeholder="Mã Khóa Học">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label"><h4>Tên Khóa Học</h4></label>
                                <div class="col-sm-4">
                                    <input type="text" name="ten_khoa_hoc" class="form-control" placeholder="Tên Khóa Học">
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
                        <?php }?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hình Ảnh Bài Học</label>
                            <div class="col-sm-4">
                                <input type="file" name="hinh_anh_bai_hoc" class="form-control" placeholder="First name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Tên Bài Học</label>
                            <div class="col-sm-4">
                                <input type="text" name="ten_bai_hoc" class="form-control" placeholder="Tên Khóa Học">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Mô Tả Ngắn Bài Học</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_simple" name="mo_ta_ngan_bai_hoc"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Nôi Dung Bài Học</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full" name="noi_dung_bai_hoc"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="quan_Ly_bai_hoc">
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
	$('#s2_with_tag').select2({placeholder: "Chọn Lớp"});
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
    TinyMCEStart('#wysiwig_full_ch1', 'extreme');
    TinyMCEStart('#wysiwig_full_1_ch1', 'extreme');
    TinyMCEStart('#wysiwig_full_2_ch1', 'extreme');
    TinyMCEStart('#wysiwig_full_3_ch1', 'extreme');
    TinyMCEStart('#wysiwig_full_4_ch1', 'extreme');
    TinyMCEStart('#wysiwig_full_dung_ch1', 'extreme');

    TinyMCEStart('#wysiwig_full_ch2', 'extreme');
    TinyMCEStart('#wysiwig_full_1_ch2', 'extreme');
    TinyMCEStart('#wysiwig_full_2_ch2', 'extreme');
    TinyMCEStart('#wysiwig_full_3_ch2', 'extreme');
    TinyMCEStart('#wysiwig_full_4_ch2', 'extreme');
    TinyMCEStart('#wysiwig_full_dung_ch2', 'extreme');
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
