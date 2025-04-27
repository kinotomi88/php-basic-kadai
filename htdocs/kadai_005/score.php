<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>合計と平均点の算出</title>
</head>

<body>

<?php
  $score_1 = 80;
  $score_2 = 60;
  $score_3 = 55;
  $score_4 = 40;
  $score_5 = 100;
  $score_6 = 25;
  $score_7 = 80;
  $score_8 = 95;
  $score_9= 30;
  $score_10 = 60;

  //score１〜10の合計を変数sumとして出力
  echo $sum = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;
  
  
  //変数sumを１０で割ることで平均点を算出
  echo $sum / 10;

  ?>

</body>

</html>

