<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>何かお話してください</p>
  <form method="post">
    <input type="text" name="a">
    <input type="submit" value="send">
  </form>
  <?php
    $f = fopen("chat.txt", "at");
    fwrite($f, $_POST["a"]."\n");
    fclose($f);
    print "<pre>";
    readfile("chat.txt");
    print "</pre>";
  ?>
</body>
</html>