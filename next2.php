<?php

//POSTで送られてきたデータは$_POST['目印名'];で取得
// name='text' → $_POST['text'];

$name = $_POST['name'];
$hyouka = $_POST['hyouka'];
$kutikomi = $_POST['kutikomi'];
$address = $_POST['address'];



?>


<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>イシオの飯ログ</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
  <div class='wrap'>
    <div class='prof'>
    <div class='prof__img <?= $active; ?>'><img src='img/logo.png'alt=''></div>
      <div class='prfo__contents'>
        <div class='prof__name'>イシオの飯ログ</div>
        <div class='prof__text'>個人的な意見です</div>
      </div>
    </div>
    <!-- /.prof -->
    <div class='works_wrap'>
      <div class='contents'>
        <div class='title'>おすすめ</div>
        <div class='text'>店名：<?= $name; ?></div>
        <div class='text'>住所：<?= $address; ?></div>
        <div class='text'>評価：<?= $hyouka; ?></div>
        <div class='text'>口コミ：<?= $kutikomi; ?></div>
      </div>
      <!-- <div class='contents'>
        <div class='title'>おすすめ</div>
        <div class='text'><?= $name; ?></div>
      </div>
      <div class='contents'>
        <div class='title'>おすすめ</div>
        <div class='text'><?= $name; ?></div>
      </div> -->
      
    <!-- /.contents -->

    <!-- <div class='contents'>
      <div class='title'>INFO</div>
      <div class='text'>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
    </div> -->
    <!-- /.contents -->

    <div class='icon <?= $active; ?>'><img src='img/icon_01.png' alt=''></div>

    <footer class='footer'>
      <small class='copy'>&copy;ジーズアカデミー 札幌</small>
    </footer>

  </div>
</body>
</html>






