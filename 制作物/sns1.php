<!DOCTYPE html>

<html>
<head>

	<meta charset = "utf-8">

	<title>学内　授業情報チャット</title>
	<style type = "text/css">
		#midasi{
				color: red;
		}
	</style>

</head>

<body bgcolor= "yellow">
	<h1 id = "midasi">学内 授業情報チャット</h1>
	<form action="sns2.php" method ="post">
		名前
	<div><input type = "text" name = "n"></div>
	メッセージ
	<div><textarea name="m"></textarea></div>
	<input type="submit" value="送信"!">
</form>

	<hr>
	<form action="sns3.php" method="post">
	検索:キーワード
	<div><input type="text" name="s"></div>
	<input type="submit" value="検索">
	</form>
	</hr>


<?php

	$db = new PDO("mysql:host=localhost;dbname=db","root","kit");
	$ps = $db->query("SELECT * FROM tb ORDER BY ban DESC");
	
	while($r = $ps->fetch()){
		print "{$r['ban']} {$r['nam']} {$r['dat']}<br>"
				.nl2br($r['mes'])."<hr>";
	}
?>




</body>
</html>
