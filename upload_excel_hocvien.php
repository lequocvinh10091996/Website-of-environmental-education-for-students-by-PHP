<?php
$connect = mysqli_connect("localhost", "root", "", "moi_truong");
$output = '';
if(isset($_POST["import"]))
{
    $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
    $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
    if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
    {
        $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
        include_once('PHPExcel.php');
        include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
        $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

        $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            $highestRow = $worksheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++)
            {
                $output .= "<tr>";
                $ho_ten_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $ten_tai_khoan_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $mat_khau_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $lap_lai_mat_khau_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $email_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $tinh_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                $huyen_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                $truong_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                $lop_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                $so_tien_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                $query = "INSERT INTO quan_ly_dang_ky (ho_ten_dang_ky, ten_tai_khoan_dang_ky, mat_khau_dang_ky, lap_lai_mat_khau_dang_ky, email_dang_ky, tinh_dang_ky, huyen_dang_ky,truong_dang_ky, lop_dang_ky, so_tien_dang_ky) VALUES ('".$ho_ten_dang_ky."', '".$ten_tai_khoan_dang_ky."', '".$mat_khau_dang_ky."', '".$lap_lai_mat_khau_dang_ky."', '".$email_dang_ky."', '".$tinh_dang_ky."', '".$huyen_dang_ky."', '".$truong_dang_ky."', '".$lop_dang_ky."', '".$so_tien_dang_ky."')";
                mysqli_query($connect, $query);

            }
        }
        $output .= '</table>';
        header('location:index_v1.php#ajax/bang_dang_ky.php');

    }
    else
    {
        header('location:index_v1.php#ajax/bang_dang_ky.php');
    }
}
?>

<html>
<head>
    <title>Thêm Người Đăng Ký Khóa Học</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body
        {
            margin:0;
            padding:0;
            background-color:#f1f1f1;
        }
        .box
        {
            width:700px;
            border:1px solid #ccc;
            background-color:#fff;
            border-radius:5px;
            margin-top:100px;
        }

    </style>
</head>
<body>
<div class="container box">
    <h3 align="center">Thêm Người Đăng Ký Khóa Học</h3><br />
    <form method="post" enctype="multipart/form-data">
        <label>Chọn Excel File</label>
        <input type="file" name="excel" />
        <br />
        <input type="submit" name="import" class="btn btn-info" value="Import" />
    </form>
    <br />
    <br />
    <?php
    echo $output;
    ?>
    <a href="index_v1.php#ajax/bang_nhung_nguoi_dang_ky_khoa_hoc.php">Trở Về</a>
</div>
</body>
</html>