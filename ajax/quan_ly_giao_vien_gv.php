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
			<li><a href="#">Quản Lý Giáo Viên</a></li>
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
					<span>Giáo Viên</span>
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
                        if(isset($_GET['id_giaovien'])) {
                            session_start();
                            include('xu_ly/config/config.php');
                            $id_giaovien = $_GET['id_giaovien'];
                            $sql = "select * from quan_ly_giao_vien where id_quan_ly_gv='$id_giaovien'";
                            $run = mysqli_query($conn, $sql);
                            $dong = mysqli_fetch_array($run);
                        }
                        ?>
                        <h4 class="page-header">Sửa Giáo Viên</h4>
                        <form action="ajax/xu_ly/xu_ly_quan_ly_giao_vien_gv.php?id_giaovien=<?php echo $dong['id_quan_ly_gv'];?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Hình Ảnh Giáo Viên</label>
                                <div class="col-sm-4">
                                    <input type="file" name="hinh_anh_giao_vien" class="form-control" placeholder="First name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Tên Giáo Viên</label>
                                <div class="col-sm-4">
                                    <input type="text" name="ten_giao_vien" class="form-control" placeholder="Tên Giáo Viên" value="<?php echo $dong['ten_giao_vien']?>">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Chuyên Ngành Giáo Viên</label>
                                <div class="col-sm-4">
                                    <input type="text" name="chuyen_nganh_giao_vien" class="form-control" placeholder="Chức Vụ Giáo Viên">
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-2 control-label">Trường Của Giáo Viên</label>
                                <div class="col-sm-4">
                                    <input type="text" name="truong_cua_giao_vien" class="form-control" placeholder="Chức Vụ Giáo Viên">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="form-styles">Mô Tả Thêm</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="wysiwig_full" name="mo_ta_them_giao_vien"><?php echo $dong['mo_ta_them_giao_vien']?></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-label-left" name="sua_giao_vien">
                                        <span><i class="fa fa-clock-o"></i></span>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php }else{?>
                    <h4 class="page-header">Thêm Giáo Viên</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_giao_vien.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hình Ảnh Giáo Viên</label>
                            <div class="col-sm-4">
                                <input type="file" name="hinh_anh_giao_vien" class="form-control" placeholder="First name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Tên Giáo Viên</label>
                            <div class="col-sm-4">
                                <input type="text" name="ten_giao_vien" class="form-control" placeholder="Tên Giáo Viên">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Chuyên Ngành Giáo Viên</label>
                            <div class="col-sm-4">
                                <input type="text" name="chuyen_nganh_giao_vien" class="form-control" placeholder="Chức Vụ Giáo Viên">
                            </div>
                        </div>
                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-2 control-label">Trường Của Giáo Viên</label>
                            <div class="col-sm-4">
                                <input type="text" name="truong_cua_giao_vien" class="form-control" placeholder="Chức Vụ Giáo Viên">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-styles">Mô Tả Thêm</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="wysiwig_full" name="mo_ta_them_giao_vien"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="quan_Ly_giao_vien">
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
