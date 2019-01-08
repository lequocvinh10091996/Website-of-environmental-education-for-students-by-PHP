<?php
//excel.php
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-disposition: attachment; filename='.rand().'.xls');
echo $_GET["data"];
?>