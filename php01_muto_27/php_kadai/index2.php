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
    // phpのコードを記述
  echo "<div class=title>"."じゃんけん大会"."</div>";

  $hand = $_POST["sub1"];
  $name = $_POST["sub2"];


  
  
  // グーを出したとき
    if($hand == "グー"){
      echo "<div class=my_hands_vs_PC_hands>"."<div class=my_gu>"."<img src=img/gu.jpg>"."</div>";
      $random = mt_rand(1,3);
      
      if($random == 1){
        echo "<div class=PC>"."あいこ"."</div>";
        echo "<div class=gu>"."<img src=img/gu.jpg>"."</div>"."</div>";
      }
      if($random == 2){
        echo "<div class=PC>"."あなたの勝ち"."</div>";
        echo "<div class=choki>"."<img src=img/choki.jpg>"."</div>"."</div>";    
      }
      if($random == 3){
        echo "<div class=PC>"."あなたの負け"."</div>";
        echo "<div class=par>"."<img src=img/par.jpg>"."</div>"."</div>";
      }
    }

// パーを出したとき
    if($hand == "パー"){
      echo "<div class=my_hands_vs_PC_hands>"."<div class=my_par>"."<img src=img/par.jpg>"."</div>";
      $random = mt_rand(1,3);

      if($random == 1){
        echo "<div class=PC>"."あなたの勝ち"."</div>";
        echo "<div class=gu>"."<img src=img/gu.jpg>"."</div>"."</div>";
      }
      if($random == 2){
        echo "<div class=PC>"."あなたの負け"."</div>";
        echo "<div class=choki>"."<img src=img/choki.jpg>"."</div>"."</div>";
      }
      if($random == 3){
        echo "<div class=PC>"."あいこ"."</div>";
        echo "<div class=par>"."<img src=img/par.jpg>"."</div>"."</div>";
      }
    }
 
  // チョキを出したとき
    if($hand == "チョキ"){
      echo "<div class=my_hands_vs_PC_hands>"."<div class=my_choki>"."<img src=img/choki.jpg>"."</div>";
      $random = mt_rand(1,3);

      if($random == 1){
        echo "<div class=PC>"."あなたの負け"."</div>";
        echo "<div class=gu>"."<img src=img/gu.jpg>"."</div>"."</div>";
      }
      if($random == 2){
        echo "<div class=PC>"."あいこ"."</div>";
        echo "<div class=choki>"."<img src=img/choki.jpg>"."</div>"."</div>";    
      }
      if($random == 3){
        echo "<div class=PC>"."あなたの勝ち"."</div>";
        echo "<div class=par>"."<img src=img/par.jpg>"."</div>"."</div>";    
      }
    }
    echo "<div class=PLAYERNAME_CP>"."<div class=PLAYERNAME>"."PLAYER:".$name."</div>";
    echo "<div class=CP>"."<p>"."CP"."</p>"."</div>"."</div>";
    

    ?>

  
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>

  </body>
</html>