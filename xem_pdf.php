<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">

    <title>PDF</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<?php
session_start();
//function fetch_data()
//{
//    $output = '123';
//    $conn = mysqli_connect("localhost", "root", "", "tut");
//    $sql = "SELECT * FROM pdf_export ORDER BY id ASC";
//    $result = mysqli_query($conn, $sql);
//    while($row = mysqli_fetch_array($result))
//    {
//        $output .= '<tr>
//                          <td>'.$row["id"].'</td>
//                          <td>'.$row["name"].'</td>
//                          <td>'.$row["age"].'</td>
//                          <td>'.$row["email"].'</td>
//                     </tr>
//                          ';
//    }
//    return $output;
//}
if(isset($_POST["generate_xem_pdf"]))
{
    include ('modules/xu_ly/config/config.php');
    $ten_khoa_hoc_cn=$_SESSION['ten_khoa_hoc_chung_nhan'];
    $db = new mysqli('localhost', 'root', '', 'moi_truong');
    $db->set_charset('utf8');
    $sql1="select * from quan_ly_khoa_hoc where ten_khoa_hoc='$ten_khoa_hoc_cn'";
    $run1=mysqli_query($conn,$sql1);
    $dong1=mysqli_fetch_array($run1);

    $ten_khoa_hoc_cn=$dong1['ten_khoa_hoc'];
    $lop_khoa_hoc_cn=$dong1['lop_khoa_hoc'];
    $id_quan_ly_kh_cn=$dong1['id_quan_ly_kh'];

    $ho_ten_dang_ky_cn=$_SESSION['ho_ten_dang_ky'];

    $sql1="select * from quan_ly_dang_ky where ho_ten_dang_ky='$ho_ten_dang_ky_cn'";
    $run1=mysqli_query($conn,$sql1);
    $dong1=mysqli_fetch_array($run1);
    $ho_ten_dang_ky_cn=$dong1['ho_ten_dang_ky'];
    $lop_dang_ky_cn=$dong1['lop_dang_ky'];
    $truong_dang_ky_cn=$dong1['truong_dang_ky'];

    $sql1="select * from quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa where ho_ten_dang_ky='$ho_ten_dang_ky_cn' and ten_khoa_hoc='$ten_khoa_hoc_cn'";
    $run1=mysqli_query($conn,$sql1);
    $dong1=mysqli_fetch_array($run1);
    $diem_cn=$dong1['diem_kiem_tra_cuoi_khoa'];

    require_once('tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//    $fontname = TCPDF_FONTS::addTTFfont('tcpdf/fonts/FreeSerifItalic.ttf', 'TrueTypeUnicode', '', 96);
//    $obj_pdf->AddFont($fontname);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('freesans');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('freesans', '', 11);
    $obj_pdf->AddPage();
    $content = '<br />';
    $content = '<div style="border-style: double; border-radius: 5px; width: 1000px; height: 650px; margin-left: 120px; ">';
    $content .= '<br><h4 align="center" style="padding-top: 20px;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>';
    $content .= '<h5 align="center">ĐỘC LẬP - TỰ DO - HẠNH PHÚC</h5>';
    $content .= '<h3 align="center" style="padding-top: 40px;"><b>GIẤY CHỨNG NHẬN KẾT QUẢ THI KHÓA HỌC</b></h3> ';
    $content .= '<h3 align="center"><b>GIÁO DỤC MÔI TRƯỜNG NĂM 2018</b></h3><br /> ';
    $content .='<br><h4 style="margin-left: 150px;">Họ và tên học sinh:<b>'.$ho_ten_dang_ky_cn.'</b></h4>';
    $content .='<h4 style="margin-left: 150px;">Khóa học hoàn thành:<b>'.$ten_khoa_hoc_cn.'</b></h4>';
    $content .='<h4 style="margin-left: 150px;">Lớp của học sinh:<b>'.$lop_dang_ky_cn.'</b></h4>';
    $content .='<h4 style="margin-left: 150px;">Trường của học sinh:<b>'.$truong_dang_ky_cn.'</b></h4>';
    $content .='<h4 style="margin-left: 150px;">Số câu trả lời đúng:<b>'.$diem_cn.'</b></h4>';
    $content .='<h4 style="margin-left: 150px;">Điểm:<b>'.(($diem_cn*10)/$diem_cn).'</b></h4>';
    $content .= '<h5 align="right" style="margin-right: 200px; padding-top: 20px;">Cần Thơ, ngày 12 tháng 12 năm 2018</h5>';
    $content .= '<h4 align="right" style="margin-right: 210px;">CHỦ TỊCH HỘI ĐỒNG THI</h4>';
    $content .= '<h5 align="right" style="margin-right: 270px;">Lê Văn Tịch</h5>';
    $content .= '<h5 align="right" style="margin-right: 110px; padding-top: 10px;"></h5>';
    $content .='</div>';
//    $obj_pdf->writeHTML($content);
//    ob_end_clean();
//    $obj_pdf->Output('file.pdf', 'I');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Xem Kết Quả Thi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
<br />
<div class="container">
    <div class="table-responsive">
        <div class="col-md-12" align="right">
            <form method="post" action="pdf.php">
                <input type="submit" name="generate_pdf" class="btn btn-success" value="Tải" />
            </form><br>
            <?php echo "<a href='lop_$lop_khoa_hoc_cn.php?lop=$lop_khoa_hoc_cn&xoa_dlc=$id_quan_ly_kh_cn' style='font-size: 20px; text-decoration: none;'>Tiếp Tục Học Khóa Kế</a>";?>
        </div>
        <br/>
        <br/>
<!--        <table class="table table-bordered">-->
<!--            <tr>-->
<!--                <th width="5%">Id</th>-->
<!--                <th width="30%">Name</th>-->
<!--                <th width="15%">Age</th>-->
<!--                <th width="50%">Email</th>-->
<!--            </tr>-->
<!--        </table>-->
    </div>

        <?php
        echo $content;
        ?>

</div>
</body>
</html>