<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // ソート関数の定義
    function sort_2way($array, $order) {
      if ($order ===  TRUE) {
        echo '昇順にソートします<br>';
        sort($array);
      } elseif ($order === FALSE) {
        echo '降順にソートします<br>';
        rsort($array);
      } else {
        echo 'ソート順は "TRUE" か "FALSE" を指定してください<br>';
        return;
      }

      foreach ($array as $num) {
        echo "{$num} <br>";
      }
    }

    // ソート対象の配列
    $nums = [15, 4, 18, 23, 10];

    // 関数を呼び出してソートを実行
    sort_2way($nums, TRUE);
    ?>
  </p>

  <p>
    <?php
    // 再び同じ配列で降順にソート
    $nums = [15, 4, 18, 23, 10];
    sort_2way($nums, FALSE);
    ?>
  </p>
</body>
</html>
