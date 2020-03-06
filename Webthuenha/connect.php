<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>connect</title>
</head>
<?php
	$conn=mysqli_connect("localhost","root","","thuenha")or die("Không thể kết nối được với mysql");
	mysqli_query ($conn,'set names "utf8"');
	
?>
<body>
</body>
</html>