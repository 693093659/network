<?php
	require('connect.php');
	require('check_login.php');
	$author_id=$_SESSION['author_id'];
	$sql="select * from story_info where author_id='{$author_id}'";
	$rs=$pdo->query($sql);
	$result=$rs->fetch(PDO::FETCH_ASSOC);	
	echo "您拥有的小说:	".$result['name'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加新小说</title>
</head>
<body>
	<form action="updatanew.php" method="post">
	<input type="text" name="name" placeholder="小说名">
	<input type="text" name="content" placeholder="简介">
	<input type="submit" name="submit">
	</form>
</body>
</html>