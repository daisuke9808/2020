<DOCTYPE html>

<html>
<head>

<meta charset = "utf-8">

<title>基本</title>

</head>

<body bgcolor = "yellow">

<?php
	
	$my_nam = htmlspecialchars($_POST["n"],ENT_QUOTES);
	$my_mes = htmlspecialchars($_POST["m"],ENT_QUOTES);
	$db = new PDO("mysql:host=localhost;dbname=db","root","kit");
	$db->query("INSERT INTO tb (ban,nam,mes,dat)
				VALUES (NULL, '$my_nam','$my_mes',NOW())");
	print "成功";
	print "<p><a href = 'sns1.php'>一覧表示</a></p>";
	
?>

</body>
</html>