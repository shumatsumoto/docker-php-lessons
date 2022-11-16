<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS3</title>
</head>
<body>

<?php
$search=htmlspecialchars($_POST["s"], ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
print "<p style='font-size:20pt'>「{$my_sea}」の検索結果</p>";
$ps=$db->query("SELECT * FROM tb WHERE mes like '%$search%' ORDER BY num DESC");
while ($r = $ps->fetch()){
      print "{$r['num']} {$r['name']} {$r['date']}<br>"
            .nl2br($r['mes'])."<hr>";
}
print "<p><a href='sns1.php'>一覧表示へ</a></p>";
?>

</body>
</html>
