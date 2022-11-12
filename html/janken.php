<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    print "<p>ジャンケン</p>";
    $a = rand(1, 3);
    if ($a === 1) {
      print "<img src='./images/gu.png'>";
    } elseif ($a === 2) {
      print "<img src='./images/choki.png'>";
    } elseif ($a === 3) {
      print "<img src='./images/pa.png'>";
    }
  ?>
</body>
</html>