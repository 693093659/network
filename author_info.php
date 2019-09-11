<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>作者信息查看</title>
</head>
<body>
	<?php 
		require('connect.php');
		$sql="select * from author_info";
		$rs=$pdo->query($sql) ;
		$list=$rs->fetchAll(PDO::FETCH_ASSOC);
		foreach ($list as $key => $value) {
    	echo '用户id:'.$value['author_id'].'用户名:'.$value['username'].'用户密码:'.$value['password'].'姓名:'.$value['name'].'<br>';
    }
	 ?>

</body>
</html>