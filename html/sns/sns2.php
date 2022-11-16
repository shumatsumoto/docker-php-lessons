<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS2</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS2</title>
</head>
<body>
<?php
$my_name=htmlspecialchars($_POST["n"], ENT_QUOTES);
$my_mes=htmlspecialchars($_POST["m"], ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
$db->query("INSERT INTO tb (num, name, mes, date)
            VALUES (NULL,'$my_name','$my_mes',NOW())");
print "書き込みに成功！";
print "<p><a href='sns1.php'>一覧表示へ</a></p>";
?>
</body>
</html>



</body>
</html>
