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
if(isset($_SESSION['ton_tai_kh_cua_gv'])){
    echo '<script>alert("Khóa học đã có giáo viên dạy !")</script>';
    unset($_SESSION['ton_tai_kh_cua_gv']);
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
			<li><a href="#">Quản Lý Khóa Học Của Giáo Viên</a></li>
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
					<span>Quản Lý Khóa Học Của Giáo Viên</span>
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
                        if(isset($_GET['id_khgv'])) {

                            include('xu_ly/config/config.php');
                            $id_khgv = $_GET['id_khgv'];
                            $sql = "select * from quan_ly_khoa_hoc_cua_giao_vien where id_quan_ly_kh_cua_gv='$id_khgv'";
                            $run = mysqli_query($conn, $sql);
                            $dong = mysqli_fetch_array($run);
                        }
                        ?>
                        <h4 class="page-header">Sửa Khóa Học học Giáo Viên</h4>
                        <form action="ajax/xu_ly/xu_ly_quan_ly_khoa_hoc_cua_giao_vien.php?id_khgv=<?php echo $dong['id_quan_ly_kh_cua_gv'];?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-2 control-label">Tên Giáo Viên</label>
                                <div class="col-sm-4">
                                    <select name="ten_giao_vien">
                                        <?php
                                        $ten_giao_vien=$dong['ten_giao_vien'];
                                        $sql1 = "select * from quan_ly_giao_vien where ten_giao_vien!='$ten_giao_vien'";
                                        $run1 = mysqli_query($conn, $sql1);
                                        ?>
                                        <option value="<?php echo $dong['ten_giao_vien'];?>"><?php echo $dong['ten_giao_vien'];?></option>
                                        <?php
                                        while($dong1=mysqli_fetch_array($run1)){
                                            ?>
                                            <option value="<?php echo $dong1['ten_giao_vien'];?>"><?php echo $dong1['ten_giao_vien'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-2 control-label">Tên Khóa Học</label>
                                <div class="col-sm-4">
                                    <select name="ten_khoa_hoc">
                                        <?php
                                        $ten_khoa_hoc=$dong['ten_khoa_hoc'];
                                        $sql2 = "select * from quan_ly_khoa_hoc where ten_khoa_hoc!='$ten_khoa_hoc'";
                                        $run2 = mysqli_query($conn, $sql2);
                                        ?>
                                        <option value="<?php echo $dong['ten_khoa_hoc'];?>"><?php echo $dong['ten_khoa_hoc'];?></option>
                                        <?php
                                        while($dong2=mysqli_fetch_array($run2)){
                                            ?>
                                            <option value="<?php echo $dong2['ten_khoa_hoc'];?>"><?php echo $dong2['ten_khoa_hoc'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary btn-label-left" name="sua_khoa_hoc_cua_giao_vien">
                                        <span><i class="fa fa-clock-o"></i></span>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    <?php }else{?>
                    <h4 class="page-header">Thêm Khóa Học Cho Giáo Viên</h4>
                    <form action="ajax/xu_ly/xu_ly_quan_ly_khoa_hoc_cua_giao_vien.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Tên Giáo Viên</label>
                            <div class="col-sm-4">
                                <select name="ten_giao_vien">
                                    <?php
                                    include('xu_ly/config/config.php');
                                    $sql = "select * from quan_ly_giao_vien";
                                    $run = mysqli_query($conn, $sql);
                                    ?>
                                    <option></option>
                                    <?php
                                    while($dong=mysqli_fetch_array($run)){
                                    ?>
                                        <?php echo $dong['ten_giao_vien'];?>
                                    <option value="<?php echo $dong['ten_giao_vien'];?>"><?php echo $dong['ten_giao_vien'];?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-2 control-label">Tên Khóa Học</label>
                            <div class="col-sm-4">
                                <select name="ten_khoa_hoc">
                                    <?php
                                    $sql1 = "select * from quan_ly_khoa_hoc";
                                    $run1 = mysqli_query($conn, $sql1);
                                    ?>
                                    <option></option>
                                    <?php
                                    while($dong1=mysqli_fetch_array($run1)){
                                        ?>
                                        <option value="<?php echo $dong1['ten_khoa_hoc'];?>"><?php echo $dong1['ten_khoa_hoc'];?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-label-left" name="quan_Ly_khoa_hoc_cua_giao_vien">
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
	$('#s2_with_tag').select2({placeholder: "Chọn Giáo Viên"});
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
