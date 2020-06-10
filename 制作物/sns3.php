<DOCTYPE html>

<html>
<head>

<meta charset = "utf-8">

<title>基本</title>

</head>

<body bgcolor = "yellow">

<?php
	
	$my_sea = htmlspecialchars($_POST["s"],ENT_QUOTES);
	$db = new PDO("mysql:host=localhost;dbname=db","root","kit");
	
	print "<p style= 'font-size:20pt'>「{$my_sea}]の検索結果</p>";
	$ps=$db->query("SELECT * FROM tb WHERE mes like '%$my_sea%'");
	while($r= $ps->fetch()){
		print "{$r['ban']} {$r['nam']} {$r['dat']}<br>"
				.nl2br($r['mes'])."<hr>";
	}
	
	
	print "<p><a href = 'sns1.php'>一覧表示</a></p>";
	
?>

</body>
</html>