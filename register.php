<?php 
	require('connect.php');
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="insert into user_info(username,password,name) values('{$username}','{$password}','{$name}')";
	if($pdo -> exec($sql)){ 
		{
			echo '<script>alert("注册成功");history.back()</script>';
			header('location:login.html');
			echo $pdo -> lastinsertid(); 
		} 
	}
?>