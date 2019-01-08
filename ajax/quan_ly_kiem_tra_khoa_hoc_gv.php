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
			<li><a href="#">Quản Lý Kiểm Tra Của Khóa Học</a></li>
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
					<span>Bài Kiểm Tra Khóa</span>
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
                if(isset($_GET['id_kiemtra_khoa'])) {
                    session_start();
                    include('xu_ly/config/config.php');
                    $id_kiemtra_khoa = $_GET['id_kiemtra_khoa'];
                    $sql = "select * from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_ktkh='$id_kiemtra_khoa'";
                    $run = mysqli_query($conn, $sql);
                    $dong = mysqli_fetch_array($run);
                }
                ?>
                <div class="box-content">
                    <h4 class="page-header">Sửa Bài Kiểm Tra Khóa</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_kiem_tra_khoa_hoc_gv.php?id_kiemtra_khoa=<?php echo $dong['id_quan_ly_ktkh']; ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Mã Bài Học</h4></label> <label class="col-sm-2 control-label"><h4><?php echo $dong['id_quan_ly_kh']; ?></h4></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Câu Hỏi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_ch1" name="cau_hoi_1"><?php echo $dong['cau_hoi_1']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 1</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_1_ch1" name="tra_loi_1_ch1"><?php echo $dong['tra_loi_1_ch1']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 2</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_2_ch1" name="tra_loi_2_ch1"><?php echo $dong['tra_loi_2_ch1']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 3</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_3_ch1" name="tra_loi_3_ch1"><?php echo $dong['tra_loi_3_ch1']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 4</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_4_ch1" name="tra_loi_4_ch1"><?php echo $dong['tra_loi_4_ch1']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời Đúng</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_dung_ch1" name="tra_loi_dung_ch1"><?php echo $dong['tra_loi_dung_ch1']; ?></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="sua_bai_kiem_tra_khoa">
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
                    $_SESSION['id_khoahoc'] = $dong['id_quan_ly_kh'];
                }
                ?>
                <div class="box-content">
                    <?php
                    $id_khoahoc = $_GET['id_khoahoc'];
                    $sql1 = "select count(*) from quan_ly_kiem_tra_khoa_hoc where id_quan_ly_kh='$id_khoahoc'";
                    $run1 = mysqli_query($conn, $sql1);
                    $dong1 = mysqli_fetch_array($run1);
                    if($dong1[0]==0){
                        $i=1;
                    }
                    if($dong1[0]>0){
                        $i=$dong1[0]+1;
                    }
                    ?>
                    <h4 class="page-header">Câu hỏi <?php echo $i;?></h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_kiem_tra_khoa_hoc_gv.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label"><h4>Mã Khóa Học</h4></label> <label class="col-sm-2 control-label"><h4><?php echo $dong['id_quan_ly_kh']; ?></h4></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Câu Hỏi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_ch1" name="cau_hoi_1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 1</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_1_ch1" name="tra_loi_1_ch1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 2</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_2_ch1" name="tra_loi_2_ch1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 3</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_3_ch1" name="tra_loi_3_ch1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời 4</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_4_ch1" name="tra_loi_4_ch1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Trả Lời Đúng</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full_dung_ch1" name="tra_loi_dung_ch1"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="them_bai_kiem_tra_khoa">
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

    // TinyMCEStart('#wysiwig_full_ch2', 'extreme');
    // TinyMCEStart('#wysiwig_full_1_ch2', 'extreme');
    // TinyMCEStart('#wysiwig_full_2_ch2', 'extreme');
    // TinyMCEStart('#wysiwig_full_3_ch2', 'extreme');
    // TinyMCEStart('#wysiwig_full_4_ch2', 'extreme');
    // TinyMCEStart('#wysiwig_full_dung_ch2', 'extreme');
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
