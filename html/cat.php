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
    $text = htmlspecialchars($_POST["a"], ENT_QUOTES);
    print (isset($_POST["a"]) && $_POST["a"] !== "") ? $text."にゃあ" : "何かしゃべって";
  ?>
</body>
</html>