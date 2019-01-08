<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT * FROM tbl_employee";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>DownLoad</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<div class="container" style="width:1000px;">
    <h3 class="text-center">FORM Đăng Ký Khóa Học</h3><br />
    <div class="table-responsive" id="employee_table">
        <table class="table table-bordered">
            <tr>
                <th width="10%">ID Khoa Hoc</th>
                <th width="10%">ID Nguoi Dang Ky</th>
                <th width="30%">Ten Khoa Hoc</th>
                <th width="50%">Ten Nguoi Dang Ky</th>
            </tr>
<!--            --><?php
//            while($row = mysqli_fetch_array($result))
//            {
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $row['id']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['gender']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['designation']; ?><!--</td>-->
<!--                </tr>-->
<!--                --><?php
//            }
//            ?>
        </table>
    </div>
    <div align="center">
        <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>
    </div>
    <div align="center">
        <br><br><a href="index_v1.php#ajax/bang_nhung_nguoi_dang_ky_khoa_hoc.php">Trở Về</a>
    </div>
</div>
<br />
</body>
</html>
<script>
    $(document).ready(function(){
        $('#create_excel').click(function(){
            var excel_data = $('#employee_table').html();
            var page = "excel.php?data=" + excel_data;
            window.location = page;
        });
    });
</script>