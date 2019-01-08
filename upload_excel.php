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
                $id_khoa_hoc = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $id_nguoi_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $ten_khoa_hoc = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $ten_nguoi_dang_ky = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $trang_thai='chưa hoàn thành';
                $query = "INSERT INTO quan_ly_nguoi_dang_ky_khoa_hoc (id_quan_ly_kh, id_quan_ly_dk, ten_khoa_hoc, ho_ten_dang_ky, trang_thai) VALUES ('".$id_khoa_hoc."', '".$id_nguoi_dang_ky."', '".$ten_khoa_hoc."', '".$ten_nguoi_dang_ky."', '".$trang_thai."')";
                mysqli_query($connect, $query);
                $output .= '<td>'.$id_khoa_hoc.'</td>';
                $output .= '<td>'.$id_nguoi_dang_ky.'</td>';
                $output .= '<td>'.$ten_khoa_hoc.'</td>';
                $output .= '<td>'.$ten_nguoi_dang_ky.'</td>';
                $output .= '</tr>';
            }
        }
        $output .= '</table>';
        header('location:index_v1.php#ajax/bang_nhung_nguoi_dang_ky_khoa_hoc.php');

    }
    else
    {
        $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
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