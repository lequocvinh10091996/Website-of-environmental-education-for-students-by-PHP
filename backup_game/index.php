<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trò Chơi</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">Jack_the_giant</div>
    </div>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "Release/version_10.data",
    codeUrl: "Release/version_10.js",
    asmUrl: "Release/version_10.asm.js",
    memUrl: "Release/version_10.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>
  <?php
  session_start();
  $id_khoahoc=$_GET['id_khoahoc'];
  echo "<h3 style='margin-left: 20px;'><a href='../bai_hoc.php?id_khoahoc=$id_khoahoc&bat_dau_hoc=1' style='text-decoration: none; color: #00CC00;'>Học Bài Kế</a></h3>";
  $_SESSION['game']='hoàn thành';
  ?>
  </body>
</html>
