<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <?php

    ?>

  <p class="player">PLAYER　NAME</p>
<form method="POST" action="index2.php" class="te">
<input type="text" value="" name="sub2"style="height:60px;font-size: 30px;">    
<input type="submit" value="グー" name="sub1" class="btn_gu" style="background: url(img/gu.jpg);">
<input type="submit" value="チョキ" name="sub1" class="btn_choki"  style="background: url(img/choki.jpg);">　
<input type="submit" value="パー" name="sub1" class="btn_par"  style="background: url(img/par.jpg);">　

</form>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>

  </body>
</html>